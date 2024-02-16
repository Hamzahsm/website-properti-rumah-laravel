/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Lightbox
5. Init Search Form
6. calculator rent


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var menu = $('.menu');
	var menuActive = false;
	var header = $('.header');
	var searchActive = false;

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initLightbox();
	initSearchForm();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if(window.innerWidth < 992)
		{
			if($(window).scrollTop() > 100)
			{
				header.addClass('scrolled');
			}
			else
			{
				header.removeClass('scrolled');
			}
		}
		else
		{
			if($(window).scrollTop() > 100)
			{
				header.addClass('scrolled');
			}
			else
			{
				header.removeClass('scrolled');
			}
		}
		if(window.innerWidth > 991 && menuActive)
		{
			closeMenu();
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.hamburger').length && $('.menu').length)
		{
			var hamb = $('.hamburger');
			var close = $('.menu_close_container');

			hamb.on('click', function()
			{
				if(!menuActive)
				{
					openMenu();
				}
				else
				{
					closeMenu();
				}
			});

			close.on('click', function()
			{
				if(!menuActive)
				{
					openMenu();
				}
				else
				{
					closeMenu();
				}
			});
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	/*

	4. Init Lightbox

	*/

	function initLightbox()
	{
		if($('.gallery_item').length)
		{
			$('.colorbox').colorbox(
			{
				rel:'colorbox',
				photo: true
			});
		}
	}

	/* 

	5. Init Search Form

	*/

	function initSearchForm()
	{
		if($('.search_form').length)
		{
			var searchForm = $('.search_form');
			var searchInput = $('.search_content_input');
			var searchButton = $('.content_search');

			searchButton.on('click', function(event)
			{
				event.stopPropagation();

				if(!searchActive)
				{
					searchForm.addClass('active');
					searchActive = true;

					$(document).one('click', function closeForm(e)
					{
						if($(e.target).hasClass('search_content_input'))
						{
							$(document).one('click', closeForm);
						}
						else
						{
							searchForm.removeClass('active');
							searchActive = false;
						}
					});
				}
				else
				{
					searchForm.removeClass('active');
					searchActive = false;
				}
			});	
		}
	}

	/*

	6. calculator 

	**/

	// function harga_properti() {
	// 	var harga = document.getElementById('harga_properti');
	// 	return harga.value;
	// }

	// function uang_muka() {
	// 	var pembayaran = document.getElementById('uang_muka');
	// 	return pembayaran.value;
	// }

	// var pilihan_suku_bunga = new Array();
	// pilihan_suku_bunga["none"] = 0;
	// pilihan_suku_bunga["bunga_rendah"] = 1;
	// pilihan_suku_bunga["bunga_bank"] = 2;

	// function ambilBunga() {
	// 	var sukuBunga = 0;
	// 	var theForm = document.forms["formCalculate"];
	// 	var selectedFilling = theForm.elements["pilihan_suku_bunga"];
	// 	sukuBunga = pilihan_suku_bunga[selectedFilling.value];
	// 	return sukuBunga;
	// }

	// function tenor() {
	// 	var jangkaTenor = document.getElementById('tenor');
	// 	return jangkaTenor.value;
	// }

	// function calculateTotal() {
	// 	var totalKpr = harga_properti() - uang_muka() * ambilBunga() ;
	// 	// var totalKpr = harga_properti() - uang_muka() * ambilBunga() / 100 / tenor();
	// 	var divobj = document.getElementById('totalPrice'); //display the result
	// 	divobj.style.display = 'block';
	// 	divobj.innerHTML = "Angsuran Tiap Bulan" + totalKpr.toLocaleString('en-US', {
	// 		style: 'currency',
	// 		currency: 'IDR',
	// 	});
	// }

	// function hideTotal() {
	// 	var divobj = document.getElementById('totalPrice');
	// 	divobj.style.display = 'none';
	// }



});