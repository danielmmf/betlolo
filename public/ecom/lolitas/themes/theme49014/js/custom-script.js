(function($){$(function(){$('.cart-holder > h3').click(function(){if($(this).hasClass('cart-opened')){$(this).removeClass('cart-opened').next().slideUp(300);}else{$(this).addClass('cart-opened').next().slideDown(300);}});$('.star-rating').each(function(){rate_cont=$(this).attr('title');$(this).append('<b class="rate_content">'+ rate_cont+'</b>');});jQuery(window).load(function(){jQuery('.wpcf7-not-valid-tip').live('mouseover',function(){jQuery(this).fadeOut();});jQuery('.wpcf7-form input[type="reset"]').live('click',function(){jQuery('.wpcf7-not-valid-tip, .wpcf7-response-output').fadeOut();});});});})(jQuery);jQuery('li.product .button').wrapInner('<b/>');jQuery('li.product .btn').wrapInner('<b/>');jQuery(document).ready(function(){var isMobile=/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);if(!isMobile){jQuery('.custom_nav').tmStickUp({correctionSelector:jQuery('#wpadminbar')});};});