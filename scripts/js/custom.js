// JavaScript Document
jQuery(document).ready(function($) {
$(".imgf").css("opacity","1.0");
$(".imgf").hover(function () {
$(this).stop().animate({
opacity:0.5
}, "slow");
},
function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

jQuery(document).ready(function($) {
$(".shareimg").css("opacity","0.7");
$(".shareimg").hover(function () {									  
$(this).stop().animate({
opacity: 1.0
}, "slow");
},	
function () {		
$(this).stop().animate({
opacity: 0.5
}, "slow");
});
});

jQuery(document).ready(function($) {
$("ul.firstnav-menu").superfish({ 
animation: {opacity:'show', height:'show', width:'show'},   // slide-down effect without fade-in 
delay:200,               // 1.2 second delay on mouseout 
autoArrows: false, 
speed: 'fast',
dropShadows: false
}); 
})

jQuery(document).ready(function($) {
$("ul.secondnav-menu").superfish({ 
animation: {opacity:'show', height:'show', width:'show'},   // slide-down effect without fade-in 
delay:200,               // 1.2 second delay on mouseout 
autoArrows: false, 
speed: 'fast',
dropShadows: false
}); 
})


jQuery(document).ready(function($) {
$("a[rel^='prettyPhoto']").prettyPhoto();
});

/* plugin */
jQuery.fn.dwFadingLinks = function(settings) {
  settings = jQuery.extend({
    duration: 500
  }, settings);
  return this.each(function() {
    var original = $(this).css('color');
    $(this).mouseover(function() { $(this).animate({ color: settings.color },settings.duration); });
    $(this).mouseout(function() { $(this).animate({ color: original },settings.duration); });
  });
};

/* usage */
jQuery(document).ready(function($) {
  $('.list_category_new h3 a').dwFadingLinks({
    color: '#dbdbdb',
    duration: 700
  });

});
jQuery(document).ready(function($) {
$(function() {

				//	Basic carousel, no options
				$('#foo0').carouFredSel();

				//	Basic carousel + timer
				$('#foo1').carouFredSel({
					auto: {
						pauseOnHover: 'resume',
						progress: '#timer1'
					}
				});

				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					auto: false,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});

				//	Variable number of visible items with variable sizes
				$('#foo3').carouFredSel({
					width: 860,
					height: 'auto',
					prev: '#prev3',
					next: '#next3',
					auto: false
				});

				//	Responsive layout, resizing the items
				$('#foo4').carouFredSel({
					responsive: true,
					width: '100%',
					scroll: 2,
					items: {
						width: 700,
					//	height: '30%',	//	optionally resize item-height
						visible: {
							min: 2,
							max: 6
						}
					}
				});

				//	Fuild layout, centering the items
				$('#foo5').carouFredSel({
					width: '100%',
					scroll: 2
				});

			});
});

jQuery(document).ready(function($) {
$(".shorttitle").tipTip({maxWidth: "auto", edgeOffset: 10});
});

/* User's Time */

function getClockTime()
{
   var now    = new Date();
   var hour   = now.getHours();
   var minute = now.getMinutes();
   var second = now.getSeconds();
   var ap = "A.M.";
   if (hour   > 11) { ap = "P.M.";             }
   if (hour   > 12) { hour = hour - 12;      }
   if (hour   == 0) { hour = 12;             }
   if (hour   < 10) { hour   = "" + hour;   }
   if (minute < 10) { minute = "0" + minute; }
   if (second < 10) { second = "0" + second; }
   var timeString = hour +
                    ':' +
                    minute +
                    ' ' +
                    
                    ap;
   return timeString;
} 

function user_time(){
	var clockTime = getClockTime();
document.write('' + clockTime);
}

/* Other Categories Tabs */

jQuery(document).ready(function($) {
$('#other_categories').tabify();
});

$(document).ready(function () {
			$('.sortable').sortable();
			$('.handles').sortable({
				handle: 'span'
			});
			$('.connected').sortable({
				connectWith: '.connected'
			});
			$('.exclude').sortable({
				items: ':not(.disabled)'
			});
		});