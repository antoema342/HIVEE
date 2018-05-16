/*************************************
* Theme Name: Job Hill
* Author: Themez Hub
* Version: 1.0
* Last Change: Dec 27 2017
  Author URI    : http://www.themezhub.com/
**************************************
* 01. Testimonial 1 Script
* 02. Employer Slide
* 03. Category Slide
* 04. Fast Click Select
* 05. Bootstrap wysihtml5 editor
* 06. Add field Script
**************************************/
(function($){
	"use strict";
	
	/*------ Testimonial 1 Script ----*/
	$('.testimonial-carousel').slick({
	  slidesToShow:2,
	  arrows: false,
	  autoplay:true,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			centerPadding: '0px',
			slidesToShow:2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			centerPadding: '0px',
			slidesToShow: 1
		  }
		}
	  ]
	});
	
	/*--- Employer Slide ---*/
	$('.employer-slide').slick({
	  centerMode: true,
	  centerPadding: '0px',
	  slidesToShow: 4,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '0px',
			slidesToShow: 3
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '0px',
			slidesToShow: 1
		  }
		}
	  ]
	});
	
	/*---- Category Slide ---*/
	$('.category-slide').slick({
	  centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  responsive: [
		{
		  breakpoint: 768,
		  settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			arrows: false,
			centerMode: true,
			centerPadding: '40px',
			slidesToShow: 1
		  }
		}
	  ]
	});
	
	/*----- Fast Click Select ------*/
	$(document).ready(function() {
	  $('select').niceSelect();
	});

	/*---Bootstrap wysihtml5 editor --*/	
	$('.textarea').wysihtml5();    
	
	/*-----Add field Script------*/
	$('.extra-field-box').each(function() {
	var $wrapp = $('.multi-box', this);
	$(".add-field", $(this)).on('click', function() {
		$('.dublicat-box:first-child', $wrapp).clone(true).appendTo($wrapp).find('input').val('').focus();
	});
	$('.dublicat-box .remove-field', $wrapp).on('click', function() {
		if ($('.dublicat-box', $wrapp).length > 1)
			$(this).parent('.dublicat-box').remove();
		});
	});
	

})(jQuery);