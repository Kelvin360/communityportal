var comments = [];
var hcb = {
	extend : function(o1, o2) {
		for (var i in o2) {
			if ( typeof o1[i] === 'undefined') {
				o1[i] = o2[i]
			}
		}
		return o1
	}
};
if ( typeof hcb_user === "undefined") {
	hcb_user = {}
}
hcb_user = hcb.extend(hcb_user, {
	comments_header : 'Comments',
	name_label : 'name',
	content_label : 'enter your comment here',
	submit : 'comment',
	logout_link : '<img src="http://www.htmlcommentbox.com/static/images/door_out.png" alt="[logout]" class="hcb-icon"/>',
	admin_link : '<img src="http://www.htmlcommentbox.com/static/images/door_in.png" alt="[login]" class="hcb-icon"/>',
	no_comments_msg : '<p>No one has commented yet. Be the first!</p>',
	add : 'Add your comment',
	again : 'Post another comment',
	rss : '<img src="http://www.htmlcommentbox.com/static/images/feed.png" class="hcb-icon" alt="rss"/> ',
	said : 'said:',
	prev_page : '<img src="http://www.htmlcommentbox.com/static/images/arrow_left.png" class="hcb-icon" alt="[prev]"/>',
	next_page : '<img src="http://www.htmlcommentbox.com/static/images/arrow_right.png" class="hcb-icon" alt="[next]"/>',
	showing : 'showing',
	to : 'to',
	website_label : 'website (optional)',
	email_label : 'email',
	anonymous : 'Anonymous',
	mod_label : '(mod)',
	subscribe : 'email me replies',
	are_you_sure : 'Do you want to flag this comment as inappropriate?',
	reply : '<img src="http://www.htmlcommentbox.com/static/images/reply.png"/> reply',
	flag : '<img src="http://www.htmlcommentbox.com/static/images/flag.png"/> flag',
	like : '<img src="http://www.htmlcommentbox.com/static/images/like.png"/> like',
	msg_thankyou : '<b>Thank you for commenting!</b>',
	msg_approval : '(this comment is not published until you approve it)',
	msg_approval_required : '<b>Thank you for commenting! Your comment will appear once approved by a moderator.</b>',
	err_bad_html : 'Your comment contained bad html.',
	err_bad_email : 'Please enter a valid email address.',
	err_too_frequent : 'You must wait a few seconds between posting comments.',
	err_comment_empty : 'Your comment was not posted because it was empty!',
	MAX_CHARS : 2048,
	PAGE : '',
	RELATIVE_DATES : true
});
hcb.extend(hcb, {
	OPTS : {
		'opt_approve' : 8,
		'opt_site' : 32,
		'opt_watermark' : 256,
		'opt_gravatar' : 64,
		'opt_email_required' : 4096,
		'opt_field_website' : 1024,
		'opt_date' : 4,
		'opt_pfilter' : 16,
		'opt_field_email' : 512,
		'opt_top' : 2,
		'opt_stop' : 8192,
		'opt_replies' : 16384,
		'opt_collapse' : 1,
		'opt_rss' : 128,
		'opt_querystring' : 2048
	},
	opts : 21032,
	likes : true,
	pagenum : 0,
	host : 'http://www.htmlcommentbox.com',
	msg : '',
	mod : '$1$wq1rdBcg$SKmu14YxgP3ljjF16/R1s1',
	user : {
		name : '',
		email : '',
		is_mod : false,
		subscribed : false
	},
	removed_backlink : false,
	auth_link : 'https://www.google.com/accounts/ServiceLogin?service=ah&passive=true&continue=https://appengine.google.com/_ah/conflogin%3Fcontinue%3Dhttp://www.htmlcommentbox.com/redirect%253Fsite%253D&ltmpl=gm&shdf=ChwLEgZhaG5hbWUaEEhUTUwgQ29tbWVudCBCb3gMEgJhaCIUc-xDB_K40ANPyQUiiQ7AtI6XRZEoATIURmtX1D4k38jXp49YLOv25ezVApo',
	page_link : 'http://www.htmlcommentbox.com/jread?pagehttp%3A//feliciahalim212.blogspot.com/2012/04/if-dji-sam-soe-is-like-human-then-it.html&mod=%241%24wq1rdBcg%24SKmu14YxgP3ljjF16/R1s1&opts=21032&num=15',
	requires_approval : 8,
	pagination : '',
	gravatar_url : ''
});
hcb.page = hcb_user.PAGE || window.location + '';
hcb.posted = hcb_user.msg_thankyou == hcb.msg;
hcb.extend(hcb, {
	collapsed_link : '<div id="HCB_comment_form_box"><a href="javascript:hcb.make_comment_form()"><b>' + (hcb.posted ? hcb_user.again : hcb_user.add) + '</b></a></div>',
	rss_link : '<a href="' + hcb.host + '/rss?page=' + escape(hcb.page) + '&opts=' + hcb.opts + '&mod=' + hcb.mod + '" style="text-decoration:none"/>' + hcb_user.rss + '</a>',
	shadow_start : '<div class="hcb-shadow-t"> <div class="hcb-shadow-tl"></div> <div class="hcb-shadow-tr"></div> </div> <div class="hcb-shadow-m">',
	shadow_end : '</div> <div class="hcb-shadow-b"> <div class="hcb-shadow-bl"></div> <div class="hcb-shadow-br"></div> </div><div class="hcb-shadow-clear"></div>',
	head : document.getElementsByTagName("head")[0],
	e : function(id) {
		return (document.all && document.all[id]) || document.getElementById(id)
	},
	remove : function(node) {
		if (node) {
			node.parentNode.removeChild(node)
		}
	},
	instr : function(search, find) {
		return search.indexOf(find) !== -1
	},
	script : function(src) {
		s = document.createElement("script");
		s.setAttribute("type", "text/javascript");
		s.setAttribute("src", src);
		hcb.head.appendChild(s)
	},
	textfield : function(name, value) {
		return '<div class="hcb-wrapper-half">' + ((hcb.OPTS.opt_watermark & hcb.opts) ? '' : '<label for="' + name + '">' + (hcb_user[name + '_label'] || '') + '</label>&nbsp;') + hcb.shadow_start + '<input id="hcb_form_' + name + '" class="text-blur text hcb-shadow-r" name="' + name + '" type="text" value="' + (value || '') + '" ' + ((hcb.OPTS.opt_watermark & hcb.opts) ? 'onfocus="hcb.watermark.focus(event)" onblur="hcb.watermark.blur(event)"/>' : '/>') + hcb.shadow_end + ' </div>'
	},
	hiddenfield : function(name, value) {
		return '<input type="hidden" name="' + name + '" value="' + value + '" id="hcb_form_' + name + '" />'
	},
	o : function(name) {
		return hcb.opts & hcb.OPTS['opt_' + name]
	},
	post : function(strURL, query) {
		hcb.script(strURL + "?" + query)
	},
	rsp_cb : function() {
		if (!(hcb.rsp && hcb.rsp.success)) {
			alert("Failed to modify comment.")
		}
	},
	watermark : {
		blur : function(e) {
			el = e.srcElement || e.target;
			if (hcb.o('watermark') && el) {
				el.className = "text-blur text hcb-shadow-r";
				if (el.value === "") {
					el.value = hcb_user[el.name + '_label']
				}
			}
		},
		focus : function(e) {
			el = e.srcElement || e.target;
			if (hcb.o('watermark') && el) {
				el.className = "text-focus text hcb-shadow-r";
				if (el.value === hcb_user[el.name + '_label']) {
					el.value = ""
				}
			}
		}
	},
	approve : function(key) {
		comment = hcb.e('comment_' + key);
		for ( i = 0; i < comment.childNodes.length; i++) {
			child = comment.childNodes[i];
			if (child && child.className && hcb.instr(child.className, 'approval-msg')) {
				hcb.remove(child)
			}
		}
		hcb.post('' + hcb.host + '/approve', 'key=' + key + '&opts=' + hcb.opts)
	},
	del : function(key) {
		hcb.remove(hcb.e('comment_' + key));
		hcb.post('' + hcb.host + '/delete', 'key=' + key)
	},
	flag : function(key) {
		if (!confirm(hcb_user.are_you_sure))
			return;
		var e = hcb.by_class(hcb.e('comment_' + key).children, 'hcb-comment-tb');
		hcb.remove(e.children[0]);
		hcb.post('' + hcb.host + '/flag', 'key=' + key)
	},
	by_class : function(elements, cls) {
		for (var i = 0; i < elements.length; i++) {
			if (elements[i].className == cls)
				return elements[i]
		}
	},
	like : function(key) {
		var e = hcb.by_class(hcb.e('comment_' + key).children, 'hcb-comment-tb');
		hcb.remove(e.children[1]);
		var e = hcb.by_class(hcb.e('comment_' + key).children, 'likes');
		e.children[0].innerText = (e.children[0].innerText || 0) * 1 + 1 + ' ';
		e.style.display = 'block';
		hcb.post('' + hcb.host + '/like', 'key=' + key)
	},
	fields : ['email', 'name', 'website', 'content'],
	submit : function() {
		if (hcb.o('field_email') && hcb.o('email_required')) {
			if (!/^[A-Z0-9._%+\-]+@[A-Z0-9.\-]+\.[A-Z]{2,4}$/.test(hcb.e('hcb_form_email').value.toUpperCase())) {
				hcb.write_err(hcb_user.err_bad_email);
				return false
			}
		}
		var f, refer;
		for (var i = 0; i < hcb.fields.length; i++) {
			f = hcb.e('hcb_form_' + hcb.fields[i]);
			if (f && (f.value === hcb_user[hcb.fields[i] + '_label'] || f.value == '')) {
				f.value = (hcb.fields[i] == 'name' ? hcb_user.anonymous : '')
			}
		}
		var reply_to = hcb.e('hcb_form_content').value.match(/@[^\n\s\,]+/) || [], uname;
		for ( i = 0; i < reply_to.length; i++) {
			uname = reply_to[i].replace("@", "");
			if (hcb.by[uname]) {
				hcb.e('hcb_form_replies_to').value = hcb.by[uname];
				break
			}
		}
		return true
	},
	write_msg : function(msg) {
		hcb.e('hcb_msg').innerHTML = msg
	},
	write_err : function(msg) {
		hcb.e('hcb_msg').className = 'hcb-err';
		hcb.write_msg(msg)
	},
	delta : function(event) {
		var el = event.target || event.srcElement;
		if ((el.textLength || el.value.length) > hcb_user.MAX_CHARS) {
			el.value = el.value.substr(0, hcb_user.MAX_CHARS)
		}
	},
	now : (new Date()).valueOf() / 1000,
	months : ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
	render_date : function(timestamp) {
		var diff = hcb.now - timestamp;
		if (diff > 24 * 3600 * 7 || !hcb_user.RELATIVE_DATES) {
			var d = new Date(timestamp * 1000);
			return this.months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear()
		}
		if (diff > 24 * 3600)
			return Math.floor(diff / (24 * 3600)) + ' days ago';
		if (diff > 3600)
			return Math.floor(diff / 3600) + ' hours ago';
		if (diff > 60)
			return Math.floor(diff / 60) + ' minutes ago';
		return "within the last minute"
	},
	make_comment_form : function() {
		var submit_html = '<input class="submit btn" id="hcb_submit" type="submit" value="' + hcb_user.submit + '" />';
		if (new String(window.location).substring(0, 8) == 'file:///')
			submit_html = '<input class="submit" id="hcb_submit" disabled="disabled" type="submit" value="Disabled (Publish First!)" />';
		var f = '<form id="hcb_form" onsubmit="return hcb.submit()" action="' + hcb.host + '/post" method="post">';
		f += hcb.hiddenfield('page', hcb.page) + '<input type="hidden" id="hcb_refer" name="refer" value="' + (hcb.instr('' + hcb.page, 'mosso') ? document.referrer : window.location + '' + (window.location.hash ? '' : '#HCB_comment_box')) + '" />' + hcb.hiddenfield("opts", hcb.opts) + hcb.hiddenfield("mod", hcb.mod) + hcb.hiddenfield("replies_to", "");
		f += hcb.textfield('name', hcb.user.name);
		if (hcb.o('field_website'))
			f += hcb.textfield('website', '');
		if (hcb.o('field_email'))
			f += hcb.textfield('email', hcb.user.email);
		var s = '';
		f += '<div class="hcb-wrapper">' + hcb.shadow_start + '<textarea onkeypress="hcb.delta(event)" class="commentbox hcb-shadow-r" name="content" id="hcb_form_content" rows="4" ' + s + ' ' + (hcb.o('watermark') ? 'onfocus="hcb.watermark.focus(event)" onblur="hcb.watermark.blur(event)"' : '') + '></textarea>' + hcb.shadow_end + '</div>' + '<div class="btn-group">' + submit_html + '&nbsp;';
		if (!hcb.removed_backlink) {
						if (hcb.user.is_mod) {
				f += '&nbsp;<small class="admin-link"><a href="' + hcb.host + '/account.html#remove_link" title="remove link"><img src="' + hcb.host + '/static/images/link_delete.png" alt="remove link" class="hcb-icon" /></a></small> '
			}
		}
		if (hcb.user.email) {
			f += '&nbsp;<small><a href="' + hcb.host + '/account.html" title="account"><img src="' + hcb.host + '/static/images/cog.png" alt="account" class="hcb-icon"/></a></small>'
		}
		if (hcb.o('replies') && (hcb.o('field_email') || hcb.user.email)) {
			f += '<span><input type="checkbox" name="subscribe" ' + (hcb.user.subscribed ? 'checked' : '') + '/>' + hcb_user.subscribe + '</span>'
		}
		if (hcb.auth_link) {
			f += '<div style="float:right"><small class="admin-link"><a href="' + hcb.auth_link + '">' + (hcb.user.name ? hcb_user.logout_link : hcb_user.admin_link) + '</a>&nbsp;</small></div><div style="clear:both"></div>'
		}
		f += '</div></form>';
		hcb.e("HCB_comment_form_box").innerHTML = f;
		hcb.watermark.blur({
			target : hcb.e('hcb_form_content')
		});
		hcb.watermark.blur({
			target : hcb.e('hcb_form_name')
		});
		hcb.watermark.blur({
			target : hcb.e('hcb_form_email')
		});
		hcb.watermark.blur({
			target : hcb.e('hcb_form_website')
		})
	},
	reply : function(key) {
		hcb.e('hcb_form_replies_to').value = key;
		var ta = hcb.e('hcb_form_content');
		hcb.watermark.focus({
			target : ta
		});
		ta.value = '@' + hcb.by[key].replace(" <i>(mod)</i>", "").replace(" (mod)", "") + ',\n' + ta.value
	},
	stop : function() {
		return hcb.o('stop') && !hcb.user.is_mod
	},
	changepage : function(rel) {
		hcb.script(hcb.page_link + "&pagenum=" + (hcb.pagenum + rel))
	},
	comment : function(C) {
		h = '<div class="comment" id="comment_' + C.key + '">';
		if (hcb.user.is_mod) {
			h += '<b class="hcb-link del" title="delete comment" onclick="hcb.del(\'' + C.key + '\')" ><img src="' + hcb.host + '/static/images/delete.png" class="hcb-icon" alt="[delete]" /></b>&nbsp;';
			if (!C.approved && hcb.requires_approval) {
				h += '<b class="hcb-link del approval-msg" title="approve comment" onclick="hcb.approve(\'' + C.key + '\')" ><img src="' + hcb.host + '/static/images/accept.png" class="hcb-icon" alt="[approve]" /></b>&nbsp;'
			}
		}
		if (C.date)
			h += '<span class="date">(' + hcb.render_date(C.date) + ') </span>';
		h += '<span class="author' + (C.author.indexOf('(mod)') > -1 ? ' hcb-mod' : '') + '"><b class="author-name">' + (C.website ? '<a rel="nofollow" target="_blank" href="' + C.website + '">' : '') + C.author.replace('(mod)', hcb_user.mod_label) + (C.website ? '</a> ' : ' ') + (C.email ? '<i class="author-email">' + C.email + '</i>' : '') + '</b> ' + hcb_user.said + '</span> <blockquote>' + (C.gravatar ? '<img align="left" class="gravatar" src="' + C.gravatar + '" />' : '') + C.comment.replace(/((?:ht|f)tp:\/\/\S{3}\S+)/g, "<a rel='nofollow' href='$1'>$1</a>") + '</blockquote>';
		if (!C.approved && hcb.requires_approval)
			h += '<p style="opacity:0.6" class="approval-msg">' + hcb_user.msg_approval + '</p>';
		h += '<p class="hcb-comment-tb">';
		h += '<a class="hcb-flag" href="javascript:hcb.flag(\'' + C.key + '\')">' + hcb_user.flag + '</a> ';
		if (hcb.likes)
			h += '<a class="hcb-like" href="javascript:hcb.like(\'' + C.key + '\')">' + hcb_user.like + '</a> ';
		if (hcb.o('replies'))
			h += '<a class="hcb-reply" href="javascript:hcb.reply(\'' + C.key + '\')">' + hcb_user.reply + '</a> ';
		h += '</p>';
		if (hcb.likes)
			h += '<div class="likes" ' + (C.likes ? '' : 'style="display:none"') + '><span>' + C.likes + ' </span><img src="' + hcb.host + '/static/images/like.png"/></div>';
		hcb.by[C.key] = C.author;
		hcb.by[C.author] = C.key;
		return h + '</div>'
	},
	init : function() {
		var i, C, p = hcb.hcb = hcb.e('HCB_comment_box');
		while (p.parentNode && p.tagName !== 'HTML') {
			p = p.parentNode;
			if (p.tagName === 'FORM') {
				alert("Warning: The HTML Comment Box code is inside a form element. Comments won't be submitted.")
			}
		}
		if (hcb.page.indexOf('opensocial.googleusercontent') > -1) {
			alert("Warning: It looks like you are using HTML Comment Box with Google Sites but didn't specify the page before copying your code. Re-copy your code with the correct options from http://htmlcommentbox.com.")
		}
		hcb.width = hcb.hcb.offsetWidth;
		var H = '#HCB_comment_box ';
		var h = '<h3>' + (hcb_user.comments_header || 'Comments') + '</h3>' + '<style type="text/css">' + H + 'div.hcb-wrapper {padding:0 5px 0 0}' + H + '#HCB_comment_form_box{padding-bottom:1em}' + H + '.hcb-link {cursor:pointer}' + H + '.hcb-icon{border:0px transparent none}' + H + 'textarea {display:block;width:100%}' + H + 'blockquote{margin:10px;overflow:hidden}' + H + '.text-blur{color:#888}' + H + '.hcb-err{color:red}' + H + '.hcb-wrapper-half{padding-bottom:0.5em}' + H + '.hcb-comment-tb{margin:0}' + H + '.comment{position:relative}' + H + '.comment .likes{position:absolute;top:0;right:0;opacity:0.8}' + H + '.comment .hcb-comment-tb a{visibility:hidden}' + H + '.comment:hover .hcb-comment-tb a{visibility:visible}' + H + '.gravatar{padding-right:2px}' + '</style>';
		h += '<p id="hcb_msg">' + hcb.msg + '</p>';
		if (hcb.o('top') && !hcb.stop()) {
			h += hcb.collapsed_link
		}
		if (comments.length === 0) {
			h += hcb_user.no_comments_msg
		} else {
			for (var ii = 0; ii < comments.length; ii++) {
				i = hcb.o('top') ? ii : comments.length - 1 - ii;
				h += hcb.comment(comments[i])
			}
		}
		if (!hcb.o('top') && !hcb.stop()) {
			h += hcb.collapsed_link
		}
		h += hcb.pagination;
		if (hcb.o('rss'))
			h += hcb.rss_link;
		hcb.hcb.innerHTML = h
	},
	by : {}
});
hcb.init();
if (!hcb.o('collapse') && !hcb.stop() && !hcb.posted) {
	hcb.make_comment_form()
};
var cached = true; 