/**
 * Slick Custom
 *
 * @package Postali Child
 * @author Postali LLC
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
	"use strict";

	
$('.slides').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: true,
	prevArrow:'<button class="attorney-prev" aria-label="Previous" type="button"><span class="arrow-icon" id="prev"></span></button>', 
	nextArrow:'<button class="attorney-next" aria-label="Next" type="button"><span class="arrow-icon" id="next"></span></button>', 
	responsive: [
	{
		breakpoint: 1024,
		settings: {
		slidesToShow: 3,
		slidesToScroll: 3,
		infinite: true,
		}
	},
	{
		breakpoint: 600,
		settings: {
		slidesToShow: 2,
		slidesToScroll: 2
		}
	},
	{
		breakpoint: 480,
		settings: {
		slidesToShow: 1,
		slidesToScroll: 1
		}
	}
	]
});
	
});