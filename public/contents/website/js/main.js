(function ($) {
 "use strict";
// click //
 $(".click").on('click',function(){
    $(".toggole").slideToggle(500);
});	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 	 

 /*--
    Off Canvas Menu
-----------------------------------*/
/*Variables*/
var $offCanvasNav = $('.offcanvas-menu'),
$offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu, .mega-menu, .menu-item ');

/*Add Toggle Button With Off Canvas Sub Menu*/
$offCanvasNavSubMenu.parent().prepend('<span class="mobile-menu-expand"></span>');

/*Close Off Canvas Sub Menu*/
$offCanvasNavSubMenu.slideUp();

/*Category Sub Menu Toggle*/
$offCanvasNav.on('click', 'li a, li .mobile-menu-expand, li .menu-title', function(e) {
    var $this = $(this);
    if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('mobile-menu-expand'))) {
        e.preventDefault();
        if ($this.siblings('ul:visible').length) {
            $this.parent('li').removeClass('active-expand');
            $this.siblings('ul').slideUp();
        } else {
            $this.parent('li').addClass('active-expand');
            $this.closest('li').siblings('li').find('ul:visible').slideUp();
            $this.closest('li').siblings('li').removeClass('active-expand');
            $this.siblings('ul').slideDown();
        }
    }
});

$( ".sub-menu, .mega-menu, .menu-item" ).parent( "li" ).addClass( "menu-item-has-children" );
 

$('#slider-active').nivoSlider({
	directionNav: true,
	animSpeed: 2000,
	slices: 18,
	pauseTime: 5000,
	pauseOnHover: false,
	controlNav: true,
	manualAdvance: true,
	controlNav: false,
	prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
	nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
});

 // product-active ///
	$('.product-active').owlCarousel({
	smartSpeed:1000,
	nav:true,
	margin:1,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:4
		},
		992:{
			items:5
		}
}
})
 // new-product-active ///
	$('.new-product-active').owlCarousel({
	smartSpeed:1000,
	nav:true,
	margin:1,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:3
		},
		992:{
			items:4
		}
}
})
 // tab-active ///
	$('.tab-active').owlCarousel({
	smartSpeed:1000,
	margin:1,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:3
		},
		992:{
			items:4
		}
}
})
 // latest-deals-active ///
	$('.latest-deals-active').owlCarousel({
	smartSpeed:1000,
	margin:0,
	nav:false,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:3
		},
		992:{
			items:1
		}
	}
})
 // feautred-active ///
	$('.feautred-active').owlCarousel({
	smartSpeed:1000,
	margin:1,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items: 1
		},
		576:{
			items: 2
		},
		768:{
			items: 2
		},
		992:{
			items: 1
		}
	}
})
 // testmonial-active ///
	$('.testmonial-active').owlCarousel({
	smartSpeed:1000,
	margin:1,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		768:{
			items:2
		},
		992:{
			items:1
		},
	}
})
 // mostviewed-active///
	$('.mostviewed-active').owlCarousel({
	smartSpeed:1000,
	margin:15,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:2
		},
		992:{
			items:2
		}
	}
})
 // brand-active///
	$('.brand-active').owlCarousel({
	smartSpeed:1000,
	margin:15,
	nav:false,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:2
		},
		576:{
			items:3
		},
		768:{
			items:4
		},
		992:{
			items:6
		}
	}
})
 // single-protfolio-active///
	$('.single-protfolio-active').owlCarousel({
	smartSpeed:1000,
	margin:0,
	nav:false,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:2
		},
		450:{
			items:3
		},
		600:{
			items:4
		},
		1000:{
			items:5
		}
	}
})
    
/*--------------------------
tab active
---------------------------- */
var ProductDetailsSmall = $('.single-protfolio-active .single-img a , .single-product-active .single-img a');

ProductDetailsSmall.on('click', function(e) {
    e.preventDefault();

    var $href = $(this).attr('href');

    ProductDetailsSmall.removeClass('active');
    $(this).addClass('active');

    $('.single-protfolio-tab .tab-content .tab-pane , .single-product-tab .tab-content .tab-pane').removeClass('active');
    $('.single-protfolio-tab .tab-content , .single-product-tab .tab-content ' + $href).addClass('active');
})    
    
    
 // single-product-active///
	$('.single-product-active').owlCarousel({
	smartSpeed:1000,
	margin:0,
	nav:false,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:3
		},
		576:{
			items:4
		},
		768:{
			items:4
		},
		992:{
			items:3
		}
	}
})
 /*---------------------
 countdown
--------------------- */
	$('[data-countdown]').each(function() {
	  var $this = $(this), finalDate = $(this).data('countdown');
	  $this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
	  });
	});

/*----------------------------- 
			home-2 js
------------------------------*/
// home2-blog-active///
	$('.home2-blog-active').owlCarousel({
	smartSpeed:1000,
	margin:0,
	nav:true,
	autoplayTimeout:1000,
	autoplay:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		768:{
			items:2
		},
		992:{
			items:2
		}
	}
})
// blog-active///
	$('.blog-active').owlCarousel({
	smartSpeed:1000,
	margin:0,
	loop:true,
	nav:true,
	autoplayTimeout:1000,
	autoplay:true,
	navText:['<i class="fa fa-caret-left"></i>','<i class="fa fa-caret-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		768:{
			items:1
		},
		992:{
			items:1
		}
	}
})

 // mostviewed-active-2///
	$('.mostviewed-active-2').owlCarousel({
	smartSpeed:1000,
	margin:15,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:2
		},
		992:{
			items:3
		}
	}
})
 // mostviewed-active-2///
	$('.mostviewed-active-2').owlCarousel({
	smartSpeed:1000,
	margin:15,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		768:{
			items:2
		},
		992:{
			items:3
		}
	}
})
 // cart-active///
	$('.cart-active').owlCarousel({
	smartSpeed:1000,
	margin:15,
	nav:true,
	navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
	responsive:{
		0:{
			items:1
		},
		768:{
			items:2
		},
		992:{
			items:2
		}
	}
})
// pricing slider////
$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 2, 500 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );

// click function//////////		
 $(".opener-1").on('click',function(){
    $(".toggle-1").slideToggle(500);
});
 $(".opener-2").on('click',function(){
    $(".toggle-2").slideToggle(500);
});
 $(".opener-3").on('click',function(){
    $(".toggle-3").slideToggle(500);
});
 $(".opener-4").on('click',function(){
    $(".toggle-4").slideToggle(500);
});
// login form click////
 $(".login-form-click").on('click',function(){
    $(".login-form").slideToggle(500);
});	
// /// show-code///
 $(".code").on('click',function(){
    $(".code-form").slideToggle(500);
});	
// /// Account password///
 $(".show-password").on('click',function(){
    $(".account-password").slideToggle(500);
});	
 
 // tooltip///
 var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
 var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl)
 })
 
 // popup///
 $('.image-link').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true
  }
});
	// mintiup////
$('#Container').mixItUp();
 
})(jQuery); 