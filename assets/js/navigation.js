/* global twentyseventeenScreenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */
(function($){
	var masthead, menuToggle, siteNavContain, siteNavigation, menuContainer, menuGeneral, tituloPs, subMenuPs, tituloTC, subMenuTC, tituloC, mobile, paginasInternas;
	function initMainNavigation(container){
		// Add dropdown toggle that displays child menu items.
		var dropdownToggle = $('<button />',{ 'class': 'dropdown-toggle', 'aria-expanded': false })
			.append(twentyseventeenScreenReaderText.icon)
			.append($('<span />',{ 'class': 'screen-reader-text', text: twentyseventeenScreenReaderText.expand }));
		container.find('.menu-item-has-children > a, .page_item_has_children > a').after(dropdownToggle);
		// Set the active submenu dropdown toggle button initial state.
		container.find('.current-menu-ancestor > button')
			.addClass('toggled-on')
			.attr('aria-expanded', 'true')
			.find('.screen-reader-text')
			.text(twentyseventeenScreenReaderText.collapse);
		// Set the active submenu initial state.
		container.find('.current-menu-ancestor > .sub-menu').addClass('toggled-on');
		container.find('.dropdown-toggle').click(function(e){
			var _this = $(this),
				screenReaderSpan = _this.find('.screen-reader-text');
			e.preventDefault();
			_this.toggleClass('toggled-on');
			_this.next('.children, .sub-menu').toggleClass('toggled-on');
			_this.attr('aria-expanded', _this.attr('aria-expanded') === 'false' ? 'true' : 'false');
			screenReaderSpan.text(screenReaderSpan.text() === twentyseventeenScreenReaderText.expand ? twentyseventeenScreenReaderText.collapse : twentyseventeenScreenReaderText.expand);
		});
	}
	initMainNavigation($('.main-navigation'));
	masthead       	= $('#masthead');
	menuToggle     	= masthead.find('.menu-toggle');
	siteNavContain 	= masthead.find('.main-navigation');
	siteNavigation 	= masthead.find('.main-navigation > div > ul');
    menuGeneral 	= $('.nav-tabs').html();
    tituloPs 		= $('li.proyectos a').html();
    subMenuPs 		= $('li.proyectos .sub-menu').html();
    tituloTC 		= $('li.tipoCasas a').html();
    subMenuTC 		= $('li.tipoCasas .sub-menu').html();
    tituloU 		= $('li.ubicacion a').html();
    tituloC 		= $('li.contacto a').html(); 
    mobile 			= /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    paginasInternas = (window.location.href.indexOf("informacion") > -1) || (window.location.href.indexOf("disponibilidad") > -1) || (window.location.href.indexOf("tour-360-exterior") > -1) || (window.location.href.indexOf("imagenes-exteriores") > -1) || (window.location.href.indexOf("planos") > -1);
    sinSubmenu = $('body.home').length || (window.location.href.indexOf("arma-tu-casa") > -1) || (window.location.href.indexOf("ubicacion") > -1) || (window.location.href.indexOf("contacto") > -1);
    // MENU ANIMATION
		// false menu proyectos
			/*$('li.proyectos').click(function(){
				$('#falseMenu h2').html(tituloPs);
				$('#falseMenu ul.falseMenu').html(subMenuPs);
				$('.menu-mobile-container').hide();
				$('#falseMenu').show();
			});*/
		//false menu for proyecto's childs
			(function(){ 
				if(paginasInternas){
					$('#thumbnail-slider').fadeTo(0, 1, function(){});
					$('#falseMenu h2').html(tituloPs);
					$('#falseMenu ul.falseMenu').html(subMenuPs);
					$('.menu-mobile-container').hide();
					$('#falseMenu').show();
					if(mobile){ 
						$('#falseMenu').hide();
					}
				}
			})();
		//false thumbnailslider
			(function(){			
				if((window.location.href.indexOf("imagenes-interiores") > -1) || (window.location.href.indexOf("imagenes-exteriores") > -1)){
					$('#thumbnail-slider').fadeTo(0, 1, function(){});
					$('#falseMThumbnailSlider').show();				
				}
			})();
		// false menu tipo casas
			/*$('li.tipoCasas').click(function(){
				$('#falseMenu h2').html(tituloTC);
				$('#falseMenu ul.falseMenu').html(subMenuTC);
				$('.menu-mobile-container').hide();
				$('#falseMenu').show();
			});*/
		//false menu for tipos de casa's childs
			(function(){ 
				if((window.location.href.indexOf("tipo-de-casa") > -1) || (window.location.href.indexOf("imagenes-interiores") > -1) || (window.location.href.indexOf("tour-360-interior") > -1)){
					$('#thumbnail-slider').fadeTo(0, 1, function(){});
					$('#falseMenu h2').html(tituloTC);
					$('#falseMenu ul.falseMenu').html(subMenuTC);
					$('.menu-mobile-container').hide();
					$('#falseMenu').show();
					if(mobile){ 
						$('#falseMenu').hide();
					}
				}
			})();
		// back to menu 
			$('.backToMenu').click(function(){
				$('#falseMenu').hide();
				if(!mobile){ 
					$('#falseMenu ul.falseMenu').html('');
				} 
				$('.menu-mobile-container').show();
			});
		// add clas active to current item
			$('#falseMenu ul.falseMenu li a').click(function(){
				$('#falseMenu ul.falseMenu li a').removeClass('active');
				$(this).addClass('active');
			});
	// RESPONSIVE MENU
		if(mobile){ 
			$(window).scroll(function(){
			    if($(window).scrollTop() > 0){
			        $('.custom-logo-link img').css('max-height','1.5em');
					$('.menu-toggle').css('height','3.2em');
					$('.site-header').css('position','fixed');
					$('.page-template-internas .site-content-contain, .page-template-imagenes .site-content-contain').css('margin-top','2.5rem');
			    } 
			    else{
			        $('.custom-logo-link img').css('max-height','3.5em');
					$('.menu-toggle').css('height','5.2em');
					$('.site-header').css('position','relative');
					$('.page-template-internas .site-content-contain, .page-template-imagenes .site-content-contain').css('margin-top','0');
			    }
			});
		} 
	// Enable menuToggle.
	(function(){
		// Return early if menuToggle is missing.
		if(!menuToggle.length){
			return;
		}
		// Add an initial value for the attribute.
		menuToggle.attr('aria-expanded', 'false');
		menuToggle.on('click.twentyseventeen', function(){
			siteNavContain.toggleClass('toggled-on');
			$('.container-menu, #top-menu').toggleClass('expandMenu');
			$('.menu-mobile-container').toggleClass('copia');
			$(this).attr('aria-expanded', siteNavContain.hasClass('toggled-on'));
			$(this).toggleClass('open');
			if(menuToggle.hasClass('open')){
				$('.menu-mobile-container').hide();
				$('#falseMenu').show();
				if(sinSubmenu){
					$('.menu-mobile-container').show();
					$('#falseMenu').hide();
				}
			}
			else{
				if(paginasInternas || (window.location.href.indexOf("tipo-de-casa") > -1)){
					$('#falseMenu').hide();
				}
				else{
					$('.menu-mobile-container').show();
				}
			}
		});
	})(); 
	// Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
	(function(){
		if(!siteNavigation.length || !siteNavigation.children().length){
			return;
		}
		// Toggle `focus` class to allow submenu access on tablets.
		function toggleFocusClassTouchScreen(){
			if('none' === $('.menu-toggle').css('display')){
				$(document.body).on('touchstart.twentyseventeen', function(e){
					if(!$(e.target).closest('.main-navigation li').length){
						$('.main-navigation li').removeClass('focus');
					}
				});
				siteNavigation.find('.menu-item-has-children > a, .page_item_has_children > a').on('touchstart.twentyseventeen', function(e){
					var el = $(this).parent('li');
					if(!el.hasClass('focus')){
						e.preventDefault();
						el.toggleClass('focus');
						el.siblings('.focus').removeClass('focus');
					}
				});
			} 
			else{
				siteNavigation.find('.menu-item-has-children > a, .page_item_has_children > a').unbind('touchstart.twentyseventeen');
			}
		}
		if('ontouchstart' in window){
			$(window).on('resize.twentyseventeen', toggleFocusClassTouchScreen);
			toggleFocusClassTouchScreen();
		}
		siteNavigation.find('a').on('focus.twentyseventeen blur.twentyseventeen', function(){
			$(this).parents('.menu-item, .page_item').toggleClass('focus');
		});
	})();
})(jQuery);