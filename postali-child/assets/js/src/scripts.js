/**
 * Theme scripting
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";
	$('#menu-icon').addClass('open');

	//Hamburger animation
	$('#menu-icon').click(function(e) {
		$(this).toggleClass('active');
		$('#menu-main-menu, #menu-esp-main-menu').slideToggle(300);
        e.preventDefault();

		//return false;
	});
	 
	//Close navigation on anchor tap
	$('#menu-icon.active').click(function() {	
		$('#menu-main-menu, #menu-esp-main-menu').slideUp(300);
	});	

	//Mobile menu accordion toggle for sub pages
	$('#menu-main-menu > li.menu-item-has-children > a, #menu-esp-main-menu > li.menu-item-has-children > a').after('<div class="accordion-toggle"><span class="icon-drw-chevron-down"></span></div>');
	
	  $('#menu-main-menu .accordion-toggle, #menu-esp-main-menu .accordion-toggle').click(function() {
		$(this).parent().find('> ul').slideToggle(300);
		$(this).toggleClass('toggle-background');
		$(this).find('.icon-arrow-down').toggleClass('toggle-rotate');
	  });


	$(document).ready(function() {
		
		function scrollHandler() {
			var element = document.getElementById('fade-img');
			var box = document.getElementById('bio-container');
			var distanceToTop = window.pageYOffset + box.getBoundingClientRect().top;
			var elementHeight = element.offsetHeight;
			var scrollTop = document.documentElement.scrollTop;

			var opacity = 1;
			
			if (scrollTop > distanceToTop) {
				opacity = 1 - ( 0.33 * (scrollTop - distanceToTop) ) / elementHeight;
			}
			
			if (opacity >= 0) {
				element.style.opacity = opacity;
			}

			console.log(opacity);
		}

		if ( $('fade-img').length ) {
			window.addEventListener('scroll', scrollHandler);
		}
		
	});

	$(".accordion").on("click", ".accordion_title", function() {
		$(this).toggleClass("active").next().slideToggle();
	});

	$(".mobile_accordion").on("click", ".mobile_accordion_title", function() {
		$(this).toggleClass("active").next().slideToggle();
	});

    //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
	$(document).ready(function() {
		$('.menu-item-has-children').on('focusin', function() {
			var subMenu = $(this).find('.sub-menu');
			subMenu.addClass('show');

			$(this).find('.sub-menu > li:last-child').on('focusout', function() {
				subMenu.removeClass('show');
			});
			$(this).find('.sub-menu').on('mouseout', function() {
				subMenu.addClass('remove');
			});
		});
	});

});