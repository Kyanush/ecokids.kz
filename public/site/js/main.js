(function($) {
	"use strict"


    var $body = $('body');

    if($('#home-slider .slick').length > 0)
    {
        $('#home-slider .slick').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            prevArrow: "<a class=\"slick-prev normal\"><span><svg><use xlink:href=\"#svg-angle-left\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-left\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M144.826 335.255a40.815 40.815 0 1 0 57.965-57.446L98.706 174 201.38 70.708a40.815 40.815 0 1 0-57.418-57.965L11.947 144.699c-15.93 15.938-15.93 41.769 0 57.706l132.879 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>",
            nextArrow: "<a class=\"slick-next normal\"><span><svg><use xlink:href=\"#svg-angle-right\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-right\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M70.445 335.255a40.815 40.815 0 1 1-57.966-57.446L116.564 174 13.892 70.708a40.815 40.815 0 1 1 57.417-57.965l132.015 131.956c15.929 15.938 15.929 41.769 0 57.706l-132.88 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>"
        });
    }

    if ($('.slick-review').length)
    {
        $('.slick-review').on('init', function() {
            $('.slick-review.preloading').removeClass('preloading');
        });
        $('.slick-review').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: "<a class=\"slick-prev normal\"><span><svg><use xlink:href=\"#svg-angle-left\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-left\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M144.826 335.255a40.815 40.815 0 1 0 57.965-57.446L98.706 174 201.38 70.708a40.815 40.815 0 1 0-57.418-57.965L11.947 144.699c-15.93 15.938-15.93 41.769 0 57.706l132.879 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>",
            nextArrow: "<a class=\"slick-next normal\"><span><svg><use xlink:href=\"#svg-angle-right\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-right\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M70.445 335.255a40.815 40.815 0 1 1-57.966-57.446L116.564 174 13.892 70.708a40.815 40.815 0 1 1 57.417-57.965l132.015 131.956c15.929 15.938 15.929 41.769 0 57.706l-132.88 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>",
            responsive: [{
                breakpoint: 480,
                settings: {
                    dots: true
                }
            }]
        });
    }

    if($('.slick-brands').length > 0)
    {
        $('.slick-brands').slick({
            dots: false,
            infinite: false,
            slidesToShow: 6,
            slidesToScroll: 6,
            prevArrow: "<a class=\"slick-prev normal\"><span><svg><use xlink:href=\"#svg-angle-left\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-left\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M144.826 335.255a40.815 40.815 0 1 0 57.965-57.446L98.706 174 201.38 70.708a40.815 40.815 0 1 0-57.418-57.965L11.947 144.699c-15.93 15.938-15.93 41.769 0 57.706l132.879 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>",
            nextArrow: "<a class=\"slick-next normal\"><span><svg><use xlink:href=\"#svg-angle-right\" \/><svg viewBox=\"0 0 216 348\" id=\"svg-angle-right\" fill=\"inherit\" stroke=\"inherit\"><path d=\"M70.445 335.255a40.815 40.815 0 1 1-57.966-57.446L116.564 174 13.892 70.708a40.815 40.815 0 1 1 57.417-57.965l132.015 131.956c15.929 15.938 15.929 41.769 0 57.706l-132.88 132.85z\" fill=\"inherit\" fill-rule=\"evenodd\" stroke=\"none\"></path></svg><\/svg><\/span><\/a>",
//          rtl: !!ideapark_wp_vars.isRtl,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                }
            }, {
                breakpoint: 690,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    dots: true
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: true
                }
            }, {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true
                }
            }]
        });
    }

    $('#home-slider .slick').on('init', function(event, slick){
        $('.slick .slick-slide.slick-current').addClass('slide-visible');
        $('#home-slider .slick').removeClass('preloading');
    });


    /** Таб гоавном стр **/
    $(".home-tabs li").click(function() {

        if($(window).width() <= 768)
            $(".home-tabs").toggleClass('expand');

        $(".home-tabs li").removeClass('current');
        $(this).addClass('current');
        var tab = $(this).data('tab');

        $(".container.home-tab").removeClass('visible');
        $(".container.home-tab").removeClass('current');

        $("#" + tab).addClass('visible');
        $("#" + tab).addClass('current');

        return false;
    });

    /** Назад суб меню **/
    $("#header .mobile-menu-back").click(function() {
        $('.selected').removeClass('selected');
        $(document.body).removeClass("submenu-open");
        return false;
    });

    /** открыть/закрыть **/
    $(".mobile-menu, .mobile-menu-close, .menu-shadow").click(function() {
        $('html').toggleClass('menu-open');
        $('body').toggleClass('menu-open');
        return false;
    });

    /** открыть суб меню **/
    $(document).on('click', ".product-categories > ul li.has-children > a:not(.js-more), .product-categories > ul li.menu-item-has-children > a:not(.js-more)", function() {
        if ($(this).closest('.sub-menu .sub-menu').length > 0) {
            return true;
        }
        if ($(window).width() >= 992) {
            return true;
        }
        if (!$(this).attr('href')) {
            $(this).parent().children('.js-more').trigger('click');
            return false;
        }
    }).on('click', ".js-more", function() {
        $(document.body).addClass("submenu-open");
        $(this).closest('li').addClass('selected');
        return false;
    });

    /** открыть/закрыть **/
    $("#header .search, #header .mobile-search, #search-close").click(function() {
        $('html').toggleClass('search-open');
        $('body').toggleClass('search-open');
        return false;
    });

    /*
	// Catalog filter
    $('#filterpro .aside-title').on('click', function (e) {
        if($(this).next(".checkbox-filter").hasClass('active')){
            $(this).next(".checkbox-filter").removeClass('active')
		}else{
            $(this).next(".checkbox-filter").addClass('active')
		}
    });

	// Mobile Nav toggle
	$('.menu-toggle > a, #close-menu').on('click', function (e) {
		e.preventDefault();
		$('#responsive-nav').toggleClass('active');
	});

	// Fix cart dropdown from closing
	$('.cart-dropdown').on('click', function (e) {
		e.stopPropagation();
	});

	/////////////////////////////////////////

	// Products Slick
	$('.products-slick').each(function() {
		var $this = $(this),
				$nav = $this.attr('data-nav');

		$this.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: false,
			infinite: true,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
			responsive: [{
	        breakpoint: 991,
	        settings: {
	          slidesToShow: 2,
	          slidesToScroll: 1,
	        }
	      },
	      {
	        breakpoint: 480,
	        settings: {
	          slidesToShow: 1,
	          slidesToScroll: 1,
	        }
	      },
	    ]
		});
	});

	// Products Widget Slick
	$('.products-widget-slick').each(function() {
		var $this = $(this),
				$nav = $this.attr('data-nav');

		$this.slick({
			infinite: true,
			autoplay: false,
			speed: 300,
			dots: false,
			arrows: true,
			appendArrows: $nav ? $nav : false,
		});
	});

	/////////////////////////////////////////

	// Product Main img Slick
	$('#product-main-img').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    fade: true,
    asNavFor: '#product-imgs',
  });

    // Main slider
    $('.main-slider').slick({
        infinite: true,
        speed: 300,
        dots: true,
        arrows: true,
        fade: true,
        autoplay: true,
    });

    // Product imgs Slick
  $('#product-imgs').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
		centerPadding: 0,
		vertical: true,
    asNavFor: '#product-main-img',
		responsive: [{
        breakpoint: 991,
        settings: {
					vertical: false,
					arrows: false,
					dots: true,
        }
      },
    ]
  });

	// Product img zoom
	var zoomMainProduct = document.getElementById('product-main-img');
	if (zoomMainProduct) {
		$('#product-main-img .product-preview').zoom();
	}

	/////////////////////////////////////////

	// Input number
	$('.input-number').each(function() {
		var $this = $(this),
		$input = $this.find('input[type="number"]'),
		up = $this.find('.qty-up'),
		down = $this.find('.qty-down');

		down.on('click', function () {
			var value = parseInt($input.val()) - 1;
			value = value < 1 ? 1 : value;
			$input.val(value);
			$input.change();
			updatePriceSlider($this , value)
		})

		up.on('click', function () {
			var value = parseInt($input.val()) + 1;
			$input.val(value);
			$input.change();
			updatePriceSlider($this , value)
		})
	});

	var priceInputMax = document.getElementById('price-max'),
		priceInputMin = document.getElementById('price-min');

	if(priceInputMax)
		priceInputMax.addEventListener('change', function(){
			updatePriceSlider($(this).parent() , this.value)
		});

	if(priceInputMin)
		priceInputMin.addEventListener('change', function(){
			updatePriceSlider($(this).parent() , this.value)
		});

	function updatePriceSlider(elem , value) {
		if ( elem.hasClass('price-min') ) {
			console.log('min')
			priceSlider.noUiSlider.set([value, null]);
            urlParamsGenerate();
		} else if ( elem.hasClass('price-max')) {
			console.log('max')
			priceSlider.noUiSlider.set([null, value]);
            urlParamsGenerate();
        }
	}
  $('[data-toggle="tooltip"]').tooltip()
*/
	// Price Slider


    if($("#slider-range").length)
    {

        var priceInputMax = document.getElementById('price_start'),
            priceInputMin = document.getElementById('price_end');
        priceInputMax.addEventListener('change', function(){
            urlParamsGenerate();
        });
        priceInputMin.addEventListener('change', function(){
            urlParamsGenerate();
        });

        $('#slider-range').slider({
            range:true,
            min: parseInt($('#catalog-price-min').val()),
            max: parseInt($('#catalog-price-max').val()),
            values: JSON.parse($('#catalog-price-value').val()),
            slide:function (a, b) {
                var min = b.values[0];
                var max = b.values[1];
                $("#price_start").val(min);
                $("#price_end").val(max);
            },
            stop:function (a, b) {
                var min = b.values[0];
                var max = b.values[1];
                $("#price_start").val(min);
                $("#price_end").val(max);
                urlParamsGenerate();
            }
        });

    }


})(jQuery);
