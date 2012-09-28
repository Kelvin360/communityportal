$(document).ready(function() 
{
	
	/*######################## FUNCTIONS ########################################*/
	/*######################## FUNCTIONS ########################################*/
	/*######################## FUNCTIONS ########################################*/		

		jQuery.fn.popup = function(seconds)
		{
			var counter = seconds;
			var interval = setInterval(function() {
			    counter--;
				//$("#body").html(counter); //show the counter
				$(this).mousemove(function(event) 
				{
				  	clearInterval(interval);
				  	//$("#body").html('cleared'); //show that the interval has been cleared
					$(this).popup(seconds); //restart the counter
				});
			
			    if (counter <= 0) 
				{
			        // Display a fancybox
					$('#body').html(seconds + ' seconds without activity. Popup is now open with the social stuff.');
			        clearInterval(interval);
			    }
			}, 1000);			
		}
		
	/*######################## WEATHER ########################################*/
	/*######################## WEATHER ########################################*/
	/*######################## WEATHER ########################################*/
	
	$.simpleWeather({
	        location: 'Utrecht, Netherlands',
	        unit: 'c',
	        success: function(weather)
			{	
				var todayHighLow 	= 	'Today\'s High: '+ weather.high+'&deg; '+weather.units.temp+'<br />Today\'s Low: '+weather.low+'&deg; '+weather.units.temp;
				var currentTemp		=	'Current Temp: '+ weather.temp+'&deg; '+weather.units.temp+ '<br />';
				var currentThumbail	=	'<img src="'+weather.thumbnail+'">';
				
				$(".weather #city").html(weather.city);
				$(".weather #todayHighLow").html(todayHighLow);
				$(".weather #currentTempAndCurrentThumbail").html(currentTemp + currentThumbail);				
			},
	        error: function(error) 
			{ 
				$(".weather").html('Yahoo weather API unresponsive :(');
			}
	});	
	
					

	/*######################## OTHER ########################################*/
	/*######################## OTHER ########################################*/
	/*######################## OTHER ########################################*/
			
	//$(this).popup(60); //1 minute with no activity
	
    $('#slider').nivoSlider({
        effect: 'boxRainGrow', // Specify sets like: 'fold,fade,sliceDown, boxRainGrow'
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 300, // Slide transition speed
        pauseTime: 5000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true, // Stop animation while hovering
        manualAdvance: false, // Force manual transitions
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false, // Start on a random slide
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
		
	$('#menu_content li').click(function()
	{
	    var id = $(this).attr('id');
		$('.sliderEventsActivities_container').children().find('.grid_14').each(function()
		{
			var display	=	$(this).css('display');
			if(display != 'none')
			{
				$(this).hide("slide", { direction: "right" }, 500, function()
				{
					$('.the_' + id).show("slide", {direction: "left"}, 500);
				});
			}
		});
	});
	
	$('.various').click(function()
	{
		$(".various").fancybox({
			maxWidth	: 1006,
			maxHeight	: 605,
			fitToView	: true,
			width		: '100%',
			height		: '100%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none',
			scrolling	: 'no',
			type:         'ajax', 
			afterClose	: function() {
				//location.reload();
			}			
		});	
	});			
	
});