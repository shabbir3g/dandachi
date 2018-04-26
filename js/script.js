(function ($) {
	"use strict";

	$(document).ready(function(){
		
		$(".accordion-section .card:first-child .collapse").addClass("show");
		$("ul.nav.nav-tabs li:first-child").addClass("active");
		$(".dental-tabs .tab-content .tab-pane:first-child").addClass("active in");

		$('.owl-carousel').owlCarousel({
    items:8,
    loop:true,
    autoplay:true,
    autoplayTimeout:1000,
		rtl:true,
		responsive:{
			 0:{
					 items:1,
			 },
			 350:{
					 items:2,
			 },
			 600:{
					 items:3,
			 },
			 1000:{
					 items:8,
			 }
		 }
});

	});
	var wow = new WOW(
			  {
				animateClass: 'animated',
				offset:       100,
				callback:     function(box) {
				  console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
				}
			  }
			);

			wow.init();
	// scroll to top

		$('.totop a').click(function(){


			$('html, body').animate({'scrollTop': '0px'},2000);

			return false;

		});

		$(window).scroll(function(){
			if($(window).scrollTop() > 500){

				$('.totop').fadeIn(1000);


			}else{

			$('.totop').fadeOut(1000);

			}
		});


		// scroll to top


  	$(".navbar-toggle").click(function() {
	  	$(this).toggleClass('in');
	  	$('.navbar-collapse').toggleClass('in');
	});
	$(window).scroll(function() {
		if ($(window).scrollTop() > 150) {
			$(".navbar").addClass("sticky");
		}
		else {
			$(".navbar").removeClass("sticky");
		}
	});


	$(document).ready(function(){


			 $('ul.member-menu ul.dropdown-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}
			});

			 $('#secondary-menu ul.navbar-nav ul.sub-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}
			});


			 $('.language-selector .switcher .selected a').each(function() {

					$(this).append('<span class="caret"></span>');

			});

			$('.image-link').magnificPopup({type:'image'});

			  $('.image-blog').magnificPopup({type:'image'});



			  // search box

				$('#search-trigger').click(function(){
                    $('#search-input').toggleClass('search-input-open');
                    $('.navbar.navbar-default.navbar-bottom ul li a').toggleClass('change-hobe');

                });

                $(document).click(function(e){
                    if(!$(e.target).closest('.ngen-search-form').length){
                        $('#search-input').removeClass('search-input-open');
						$('.navbar.navbar-default.navbar-bottom ul li a').removeClass('change-hobe');
                    }
                })


				// search box









	});

}(jQuery));
