<?php echo $this->Html->docType('html5');?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Community Portal | ' . $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->meta('favicon.ico','/favicon.ico',array('type' => 'icon'));
		
		
		echo $this->Html->meta('icon');
		echo $this->Html->meta('favicon.ico','/favicon.ico',array('type' => 'icon'));
		echo $this->Html->meta('keywords','Community Portal, netherlands, portal, community');
		echo $this->Html->meta('description','');		
		echo $this->Html->meta(array('name' => 'author', 'content' => 'Darrel K. Farro'));
		echo $this->Html->meta(array('name' => 'robots', 'content' => 'noindex, nofollow'));
		//echo $this->Html->meta(array('name' => 'revisit-after', 'content' => '1 day'));
		echo $this->Html->meta(array('name' => 'language', 'content' => 'EN'));		
		
		echo $this->Html->css('1152_16_1_1.css');
		echo $this->Html->css('jquery_cupertino/jquery-ui-1.8.23.custom.css');
		echo $this->Html->css('default.css');
		echo $this->Html->css('static.css');
		echo $this->Html->css('gradient.css');
		echo $this->Html->css('nivoslider_themes/default/default.css');	
		echo $this->Html->css('slideTabs_horizontal.css');	
		echo $this->Html->css('jquery.fancybox.css');
		echo $this->Html->css('jquery.fancybox-buttons.css');
		echo $this->Html->css('jquery.fancybox-thumbs.css');	
			
		echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true', false);
		echo $this->Html->script('jquery-1.8.0.min.js');
		echo $this->Html->script('jquery-ui-1.8.23.custom.min.js');
		echo $this->Html->script('jquery.nivo.slider.js');
		echo $this->Html->script('jquery.fancybox.pack.js');
		echo $this->Html->script('jquery.fancybox-buttons.js');
		echo $this->Html->script('jquery.fancybox-media.js');
		echo $this->Html->script('jquery.fancybox-thumbs.js');
		echo $this->Html->script('jquery_import.js');
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body id='body'>
	<noscript class='noscript'>
	<p>
		Please enable JavaScript or upgrade to a JavaScript-capable browser to use Community Portal and its features.
	</p>		
	</noscript>	
	
	<!-- ##############  FIXED items ################ -->
	<!-- ##############  FIXED items ################ -->	
	
	<div id='fixed_map' class='shadow_1px radius_3px'>
		<p class='rotate_90_degrees'>
			<a class="various fancybox.ajax" href="./Google/map">Map</a>
		</p>
	</div>
	
	<div id='fixed_social' class='shadow_1px radius_3px'>
		<p class='rotate_90_degrees'>
			<a class="various fancybox.ajax" href="./Social/message/">Social</a>
		</p>
	</div>	

	<!-- ##############  HEADER ################ -->
	<!-- ##############  HEADER ################ -->
	
	<header>
		<div class='container_16' style='height: inherit;'>
			<div class='grid_14' style='margin: 0px 72px 0px 72px; height: 45px;'>
			
				<ul id='menu_content'>
					<li id='activities'>
						Activities
					</li>
					<li id='events'>
						Events
					</li>
					<li id='guestbook'>
						Guestbook
					</li>
				</ul>	
				
				<div id='weather'>
					Weather info here ..
				</div>				
				
			</div> <!-- end class grid_14 -->
		</div> <!-- end class container_16 -->
	</header>
	
	<!-- ##############  SLIDER / EVENTS / ACTIVITIES ################ -->
	<!-- ##############  SLIDER / EVENTS / ACTIVITIES ################ -->
	
	<div class='sliderEventsActivities_container bg_sliderEventsActivitiesContainer shadow_inset_5px'>
		<div class='container_16' style='height: inherit;'>
			
			<div class='grid_14 the_slider' style='margin: 20px 72px 20px 72px; height: 605px;'>
				<?php echo $this->Element('the_slider/homeslider'); ?>
			</div> <!-- end theSlider -->
			
			<div class='grid_14 the_activities' style='display: none; margin: 20px 72px 20px 72px; height: 605px;'>
				<?php echo $this->Element('the_activities/homeactivities'); ?>
			</div> <!-- end theActivities -->			
			
			<div class='grid_14 the_events' style='display: none; margin: 20px 72px 20px 72px; height: 605px;'>
				<?php echo $this->Element('the_events/homeevents'); ?>
			</div> <!-- end theEvents -->
			
			<div class='grid_14 the_guestbook' style='display: none; margin: 20px 72px 20px 72px; height: 605px;'>
				<?php echo $this->Element('the_guestbook/homeguestbook'); ?>
			</div> <!-- end theActivities -->			
									
		</div> <!-- end class container_16 -->
	</div> <!-- end class slider_container -->
	
	<!-- ##############  FOOTER ################ -->
	<!-- ##############  FOOTER ################ -->
	
	<footer>
		<div class='container_16' style='height: inherit;'>
			<div class='grid_14' style='margin: 0px 72px 0px 72px; height: inherit;'>
				
				<ul id='footer_content' style='height: inherit;'>
					<li>Ad #1 (&euro; 20)</li>
					<li>Ad #2 (&euro; 20)</li>
					<li>Ad #3 (&euro; 20)</li>
				</ul>					
				
			</div> <!-- end class grid_14 -->
		</div> <!-- end class container_16 -->
		
		<?php 						
			//echo $this->Session->flash();
			//echo $this->Session->flash('auth');	
			//echo $this->fetch('content'); 
		?>				
	</footer>	
		
</body>
</html>