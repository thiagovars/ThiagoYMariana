/*	Table OF Contents
==========================
1. Suggestion box
2. Radiobox - Adaptação
3. Nav - Sticky
4. Nav - One Page 
5. TimeCircles Countdown
6. Magnific Popup
7. Ajax Form
8. Stellar Parallax
9. Owl Carrousel
*/

"use strict";
$(document).ready(function() {
  /*==============================
		1. Suggestion box
  ==============================*/

	var namesRelationeds = [];
    $( "#nomes" )
    .on('keyup', function () {
    	if (namesRelationeds.length) { 
  			namesRelationeds.length = 0; 
  		}
    	$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '../inc/names_relations.php',
			data: { "name" : this.value },
			}).done(function (data) {
				$.each(data, function (key, val) {
					namesRelationeds.push(val);
				});
			});
    })
    .autocomplete({
      source: namesRelationeds
    });

	/*==============================
		2. Radiobox - Adaptação
	/*============================*/

	$(".radio-button").on('click', function () {
		var element = this.attributes[0];
		if ((element.nodeValue == 'radio-1')) {
			$('#radiobox-1').prop('checked', true);
			$('#radiobox-2').prop('checked', false);
		} else if (element.nodeValue == 'radio-2') {
			$('#radiobox-1').prop('checked', false);
			$('#radiobox-2').prop('checked', true);
		}
	});

	/*==============================
		3. Nav - Sticky
	==============================*/
	$(window).on("load", function(){
	  $("#nav-sticky-wrapper").sticky({ topSpacing: 0 });
	});
	
	/*==============================
		4. Nav - One Page 
	==============================*/
	$('#nav_list').onePageNav({
		currentClass: 'active',
	});

	/*==============================
		5. TimeCircles Countdown
	==============================*/
	/*  */
	$(".countdown").TimeCircles({
		fg_width: 0.02,
		bg_width: 0.3,
		circle_bg_color: '#7b7571',
		time: {
			Days: { color: '#f9667e' },
			Hours: { color: '#f9667e' },
			Minutes: { color: '#f9667e' },
			Seconds: { color: '#f9667e' }
		},
		count_past_zero: false
	});
	$(window).on("resize", function(){
	    $(".countdown").TimeCircles().rebuild();
	});

	/*==============================
		6. Magnific Popup
	==============================*/
	$('.gallery-popup').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  gallery:{enabled:true},
	  //type: 'image', //Detecta el tipo con la clase mfp-TYPE
	  mainClass: 'mfp-with-zoom', // this class is for CSS animation below

	  zoom: {
	    enabled: true, // By default it's false, so don't forget to enable it

	    duration: 300, // duration of the effect, in milliseconds
	    easing: 'ease-in-out', // CSS transition easing function

	    // The "opener" function should return the element from which popup will be zoomed in
	    // and to which popup will be scaled down
	    // By defailt it looks for an image tag:
	    opener: function(openerElement) {
	      // openerElement is the element on which popup was initialized, in this case its <a> tag
	      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
	      return openerElement.is('img') ? openerElement : openerElement.find('img');
	    }
	  },
	  markup: '<div class="mfp-figure">'+
					'<div class="mfp-close"></div>'+
					'<div class="mfp-img"></div>'+
					'<div class="mfp-bottom-bar">'+
					  '<div class="mfp-title"></div>'+
					  '<div class="mfp-counter"></div>'+
					'</div>'+
				  '</div>', // Popup HTML markup. `.mfp-img` div will be replaced with img tag, `.mfp-close` by close button
	  titleSrc: 'title'
	  // other options
	});

	/*==============================
		7. Ajax Form Assistent
	==============================*/
	$('#formAssistant').on('click', function(event) {
		event.preventDefault(event);
		var Form = $('#ajaxForm');
		var hasErrors = Form.validator('validate').has('.has-error').length
		var veganmenu = $("input[name=veganmenu]:checked").val();
		if (!hasErrors && veganmenu != 'undefined'){
			$('#fullscreenloading').show();
			$('#boxedResult').show();
			$('#sendResult').html('<div class="uil-rolling-css"><div><div></div><div></div></div></div>');
			$.ajax({
				type: 'POST',
				url: '../inc/confirm.php',
				data: Form.serialize(),
				success: function(msg){
					if (msg) {
						$('#sendResult').html('<img src="../img/form-icon-ok.png"/><br/><span class="title success">Confirmado!</span><br/><br /><strong>'+thanks+'</strong><br /><br /><button class="btn btn-primary btn-lg BtnCloseResult" type="button">Confirmar outro convidado?</button>');
						$('#nomes').val('');
						$('#musica').val('');
						$('#radiobox-1').prop('checked', true);
					}
				},
				error: function(){
					$('#sendResult').html('<img src="../img/form-icon-error.png"/><br/><span class="title error">Sorry!</span><br/>Your data has not been sent. Please try again.<br /><strong>Error: #AJ001</strong><br /><br /><button class="btn btn-default BtnCloseResult" type="button">Tentar Novamente</button>');
				}
			});
		}
	});
	$('#formNotAssistant').on('click', function(event) {
		event.preventDefault(event);
		var Form = $('#ajaxForm');
		var hasErrors = Form.validator('validate').has('.has-error').length
		var veganmenu = $("input[name=veganmenu]:checked").val();
		if (!hasErrors){
			$('#fullscreenloading').show();
			$('#boxedResult').show();
			$('#sendResult').html('<div class="uil-rolling-css"><div><div></div><div></div></div></div>');
			$.ajax({
				type: 'POST',
				url: '../inc/confirm.php?confirm=no',
				data: Form.serialize(),
				success: function(msg){
					if (msg) {
						$('#sendResult').html('<img src="../img/form-icon-ok.png"/><br/><span class="title success">Confirmado!</span><br/><br /><strong>Obrigado por sua resposta</strong><br /><br /><button class="btn btn-primary btn-lg BtnCloseResult" type="button">Fechar</button>');
						$('#nomes').val('');
						$('#musica').val('');
						$('#radiobox-1').prop('checked', true);
					}
				},
				error: function(){
					$('#sendResult').html('<img src="../img/form-icon-error.png"/><br/><span class="title error">Sorry!</span><br/>Your data has not been sent. Please try again.<br /><strong>Error: #AJ001</strong><br /><br /><button class="btn btn-default BtnCloseResult" type="button">Tentar Novamente</button>');
				}
			});
		}
	});
	$(document).on('click', '.BtnCloseResult', function () {
		$('#boxedResult').hide();
		$('#fullscreenloading').hide();
	});


	/*==============================
		8. Stellar Parallax
	==============================*/
	react_to_window();
        
	//only acstivate stellar for window widths above or equal to 1024
    var stellarActivated = false;
    
    $(window).on("resize", function() {
        react_to_window();
    });
    
    function react_to_window() {
        if ($(window).width() <= 1024) {
            if (stellarActivated === true) {
                $(window).data('plugin_stellar').destroy();
                stellarActivated = false;
            }
        } else {
            if (stellarActivated === false) {

                $.stellar({
                	horizontalScrolling: false,
					responsive: true,
               });
                
                $(window).data('plugin_stellar').init();
                stellarActivated = true;
            }
        }
    }

  /*==============================
		9. Owl Carrousel
	==============================*/
	$('#owl-logo').owlCarousel({
		items : 3,
		lazyLoad : true,
		navigation : false
	});
 });