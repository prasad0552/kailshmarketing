(function ($) {
	"use strict";


jQuery(document).ready(function($){
    
    // Slicknav
    $('.main_menu').slicknav();
    
    // Owl Carousel for featured client logo
    $('.featured_client_carousel').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            600:{
                items:4
            },
            992:{
                items:6
            }
        }
    });
    
    // Owl Carousel for Testimonial
    $('.all_testimonial').owlCarousel({
        loop:true,
        margin:30,
        autoplay:true,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            400:{
                items:1
            },
            600:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
	
    // Service page featured 
    $('.serv_featured').owlCarousel({
        loop:true,
        margin:0,
        autoplay:false,
        dots:false,
        nav:true,
        navText: ["<i class='pe-7s-angle-left-circle'></i>", "<i class='pe-7s-angle-right-circle'></i>"],
        responsive:{
            0:{
                items:1
            },
            400:{
                items:2
            },
            600:{
                items:4
            },
            992:{
                items:6
            }
        }
    });
	
    //Pricing Table
    $('.single_pricing_table').on('mouseenter',  function(){
        $('.single_pricing_table').removeClass('special');
        $(this).addClass('special');
    }).on('mouseleave', function() {
        $(this).removeClass('special');
    });
    $('.pricing_table').on('mouseleave', function() {
        $('.pricing_table > .col-sm-4:nth-child(2) > .single_pricing_table').addClass('special');
    });
	
    if(typeof($.fn.knob) != 'undefined') {
		$('.knob').each(function () {
		  var $this = $(this),
			  knobVal = $this.attr('data-rel');
	
		  $this.knob({
			'draw' : function () {
			  $(this.i).val(this.cv + '%').css('font-size', '28px').css('color', '#fff').css('font-family', 'Montserrat').css('font-weight', '400');
			}
		  });
		  
		  $this.appear(function() {
			$({
			  value: 0
			}).animate({
			  value: knobVal
			}, {
			  duration : 2000,
			  easing   : 'swing',
			  step     : function () {
				$this.val(Math.ceil(this.value)).trigger('change');
			  }
			});
		  }, {accX: 0, accY: -150});
		});
    }
	
    if(typeof($.fn.knob) != 'undefined') {
		$('.knob2').each(function () {
		  var $this = $(this),
			  knobVal2 = $this.attr('data-rel');
	
		  $this.knob({
			'draw' : function () {
			  $(this.i).val(this.cv + '%').css('font-size', '24px').css('color', '#333333').css('font-family', 'Montserrat').css('font-weight', '700');
			}
		  });
		  
		  $this.appear(function() {
			$({
			  value: 0
			}).animate({
			  value: knobVal2
			}, {
			  duration : 2000,
			  easing   : 'swing',
			  step     : function () {
				$this.val(Math.ceil(this.value)).trigger('change');
			  }
			});
		  }, {accX: 0, accY: -150});
		});
    }
    
	// Portfolio filter
	$('#portfolio').mixItUp();
	
	// Services Portfolio filter
	$('#sportfolio').mixItUp();
    
    // jQuery Lightbox
    $('.lightbox').venobox({
        numeratio: true,
        infinigall: true
    });
    
});


jQuery(window).load(function(){
    
    $('body, html').removeClass('fix');
    
    $("#preloader").fadeOut(500);
    
});



}(jQuery));	

function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon glyphicon-minus glyphicon glyphicon-plus');
}
$('#abaccordion').on('hidden.bs.collapse', toggleChevron);
$('#abaccordion').on('shown.bs.collapse', toggleChevron);
