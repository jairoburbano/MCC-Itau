(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();
    function headeMobile() {
        var icon = $('.header__icon'),
            body = $('body, html'),
            menu = $('.header--bottom');
        icon.click(function() {
            $(this).toggleClass('active');
            body.toggleClass('noscroll');
            menu.stop().slideToggle();
        });
    }
    function subMenu() {
        var menu = $('.header__client'),
            submenu = $('.header__client__box');
        if(windowSize > 740 && windowSize < 980) {
            menu.click(function() {
                submenu.stop().slideToggle(300);
                $(this).toggleClass('active');
            });
        }
        if(windowSize > 980) {
            menu.hover(function() {
                submenu.stop().slideToggle(300);
                $(this).toggleClass('active');
            });
        }
    }
    function inputFile() {
        var fileInput = $('.style-file input')
        $(':file').change(function(){
            var valor = $(this).val(),
                fileName = valor.split(/(\\|\/)/g).pop();
            $(this).parent('.style-file').find('p').text(fileName);
            $(this).parent('.style-file').find('p').addClass('active');
        });
        $(':file').hover(function() {
            $(this).parent().toggleClass('focusin');
        });
    }
    function checkbox() {
        var title = $('.checkbox__title'),
            group = $('.checkbox-group');
        title.click(function() {
            $(this).parent().find('.checkbox__content').stop().slideToggle();
        });
        group.click(function() {
            if($(this).find('input').is(':checked')) {
                $(this).addClass('active');
            } else {
                $(this).removeClass('active');
            }
        });
    }
    function indices() {
        var slide = $('.indices__container .indices__content');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                slideshow: false,
                prevText: '<svg><use xlink:href="#shape-icon-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-icon-next" /></svg>',
            });
        });
    }
    function gerentes() {
        var item = $('.gerentes--flex'),
            close = $('.gerentes__close'),
            lightbox = $('.gerentes__text'),
            alto = $('.contenedor--lightbox'),
            i = 1,
            j = 1,
            count = 1,
            box = $('.gerentes__item'),
            totalIndex = box.length;

        if(windowSize > 740) {
            $('.container__gerentes').append('<div class="relleno"></div>');
            var fillBlock = $('.relleno');
            $('.gerentes__text').append('<div class="slide--prev" data-prev="item-0"><svg><use xlink:href="#shape-icon-prev" /></div><div class="slide--next" data-next="item-2"></svg><svg><use xlink:href="#shape-icon-next" /></svg></div><div class="gerentes__close"><svg><use xlink:href="#shape-icon-close" /></svg></div>');
            var nextSlide = $('.slide--next'),
                prevSlide = $('.slide--prev');
            $('.gerentes__icon').append('<div class="flecha"></div>');
        }
        box.each(function() {
            if(windowSize > 740) {
                var altura = $(this).find('.gerentes--flex').height() + 15,
                    distancia = Math.floor($(this).offset().top + altura),
                    alturaContent = $(this).find('.gerentes__text').height();
                $(this).attr('data-index', count);
                $(this).attr('data-altura', distancia);
                $(this).attr('data-hijo', alturaContent);
                $(this).attr('data-number', 'item-' + count);
                var dataAltura = $(this).attr('data-altura');
                $(this).find('.gerentes__text').css('top', dataAltura + "px");
                count++;
            }
        }).promise().done( function(){ 
            $('.gerentes__text').addClass('gerente__hide');
        });
        item.click(function() {
            var $this = $(this),
                counter = $(this).parents('.gerentes__item').data('index'),
                alturaHijo= $(this).parents('.gerentes__item').data('hijo'),
                paddingHijo = alturaHijo + 20,
                multiplo = counter%4;
            $(this).parent().siblings().removeClass('gerentes__active');
            if(windowSize < 740) {
                $(this).parent().siblings().find('.gerentes__text').slideUp();
                $this.parent().find('.gerentes__text').stop().slideToggle(function() {
                    $('html, body').stop().animate({
                        scrollTop: $(this).parent().offset().top
                    });
                });
                $this.parent().toggleClass('gerentes__active');
            }
            if(windowSize > 740) {
                $(this).parent().siblings().find('.gerentes__text__content').css('opacity', '0');
                $(this).parent().siblings().find('.gerentes__text').slideUp();
                $this.parent().addClass('gerentes__active');
                var nextIndex = $(this).parent().next().attr('data-number'),
                    prevIndex = $(this).parent().prev().attr('data-number');
                nextSlide.attr('data-next', nextIndex);
                prevSlide.attr('data-prev', prevIndex);
                if(counter == 1) {
                    prevSlide.addClass('disable');
                } else {
                    prevSlide.removeClass('disable');
                }
                if(counter == totalIndex) {
                    nextSlide.addClass('disable');
                } else {
                    nextSlide.removeClass('disable');
                }
                fillBlock.hide();
                fillBlock.css('top', $(this).parent().attr('data-altura') + "px");
                fillBlock.animate({height : alturaHijo}, 300);
                fillBlock.slideDown();
                $(this).parents('.gerentes__item').animate({paddingBottom : paddingHijo}, 300, function() {
                    $(this).siblings().animate({paddingBottom : 0}, 300); 
                });
                $this.parent().find('.flecha').delay(300).slideDown(function() {
                    $this.parent().find('.gerentes__text').slideDown(300, function() {
                        $('html, body').stop().animate({
                            scrollTop: $(this).parent().offset().top
                        }, 1000);
                    });
                });
                $this.parent().siblings().find('.flecha').slideUp();
                $this.parent().find('.gerentes__text__content').delay(300).animate({opacity : 1});
                if($('.gerentes__active').length) {
                    item.css('opacity', '0.5');
                } else {
                    item.css('opacity', '1');
                }
            }
        });
        if(windowSize > 740) {
            if($('.gerentes__item').length == 5) $('.container__gerentes').addClass('gerentes--5');
            if($('.gerentes__item').length == 4) $('.container__gerentes').addClass('gerentes--4');
            nextSlide.click(function() {
                var data = $(this).attr("data-next"),
                    totalIndex = $('.gerentes__item').length,
                    counter = $(this).parents('.gerentes__item').next().data('index'),
                    alturaHijo= $(this).parents('.gerentes__item').next().data('hijo'),
                    paddingHijo = alturaHijo + 20,
                    multiplo = counter%3,
                    $this = $(this);
                if(multiplo == 1) {
                    fillBlock.slideUp(function() {
                        $this.parents('.gerentes__item').animate({paddingBottom : 0}, 300);
                        fillBlock.css('top', $this.parents('.gerentes__item').next().attr('data-altura') + "px");
                        fillBlock.css('height', alturaHijo, 300);
                        fillBlock.slideDown();
                        $this.parents('.gerentes__item').next().animate({paddingBottom : paddingHijo}, 300);
                    });
                } else {
                    fillBlock.css('top', $this.parents('.gerentes__item').next().attr('data-altura') + "px");
                    fillBlock.animate({height : alturaHijo}, 300);
                    $this.parents('.gerentes__item').next().animate({paddingBottom : paddingHijo}, 150, function() {
                        $(this).siblings().animate({paddingBottom : 0}, 150); 
                    });
                }
                if(counter == 1) {
                    prevSlide.addClass('disable');
                } else {
                    prevSlide.removeClass('disable');
                }
                if(totalIndex == counter) {
                    nextSlide.addClass('disable');
                } else {
                    nextSlide.removeClass('disable');
                }
                var nextIndex = $(this).parents('.gerentes__item').nextAll().eq(1).attr('data-number');
                var prevIndex = $(this).parents('.gerentes__item').attr('data-number');
                nextSlide.attr('data-next', nextIndex);
                prevSlide.attr('data-prev', prevIndex);
                $this.parents('.gerentes__item').next().find('.flecha').delay(300).slideDown(function() {
                    $('.gerentes__item[data-number="'+data+'"]').find('.gerentes__text').slideDown(300, function() {
                        $('html, body').stop().delay(300).animate({
                            scrollTop: $('.gerentes__item[data-number="'+data+'"]').offset().top
                        }, 1000);
                    });
                });
                $this.parents('.gerentes__item').next().siblings().find('.flecha').slideUp()
                $('.gerentes__item[data-number="'+data+'"]').find('.gerentes__text__content').delay(300).animate({opacity : 1});
                $('.gerentes__item[data-number="'+data+'"]').siblings().find('.gerentes__text__content').css('opacity', '0');
                $('.gerentes__item[data-number="'+data+'"]').siblings().find('.gerentes__text').hide();
                $('.gerentes__item[data-number="'+data+'"]').addClass('gerentes__active');
                $('.gerentes__item[data-number="'+data+'"]').siblings().removeClass('gerentes__active');
            });
            prevSlide.click(function() {
                var data = $(this).attr("data-prev"),
                    totalIndex = $('.gerentes__item').length,
                    counter = $(this).parents('.gerentes__item').prev().data('index'),
                    alturaHijo= $(this).parents('.gerentes__item').prev().data('hijo'),
                    paddingHijo = alturaHijo + 20,
                    multiplo = counter%3,
                    $this = $(this);
                if(multiplo == 0) {
                    fillBlock.slideUp(function() {
                        $this.parents('.gerentes__item').animate({paddingBottom : 0}, 300);
                        fillBlock.css('top', $this.parents('.gerentes__item').prev().attr('data-altura') + "px");
                        fillBlock.css('height', alturaHijo, 300);
                        fillBlock.slideDown();
                        $this.parents('.gerentes__item').prev().animate({paddingBottom : paddingHijo}, 300);
                    });
                } else {
                    fillBlock.css('top', $this.parents('.gerentes__item').prev().attr('data-altura') + "px");
                    fillBlock.animate({height : alturaHijo}, 300);
                    $this.parents('.gerentes__item').prev().animate({paddingBottom : paddingHijo}, 150, function() {
                        $(this).siblings().animate({paddingBottom : 0}, 150); 
                    });
                }
                if(counter == 1) {
                    prevSlide.addClass('disable');
                } else {
                    prevSlide.removeClass('disable');
                }
                if(totalIndex == counter) {
                    nextSlide.addClass('disable');
                } else {
                    nextSlide.removeClass('disable');
                }
                var nextIndex = $(this).parents('.gerentes__item').attr('data-number');
                var prevIndex = $(this).parents('.gerentes__item').prevAll().eq(1).attr('data-number');
                nextSlide.attr('data-next', nextIndex);
                prevSlide.attr('data-prev', prevIndex);
                $this.parents('.gerentes__item').prev().find('.flecha').delay(300).slideDown(function() {
                    $('.gerentes__item[data-number="'+data+'"]').find('.gerentes__text').slideDown(300, function() {
                        $('html, body').stop().delay(300).animate({
                            scrollTop: $('.gerentes__item[data-number="'+data+'"]').offset().top
                        }, 1000);
                    });
                });
                $this.parents('.gerentes__item').prev().siblings().find('.flecha').slideUp()
                $('.gerentes__item[data-number="'+data+'"]').find('.gerentes__text__content').delay(300).animate({opacity : 1});
                $('.gerentes__item[data-number="'+data+'"]').siblings().find('.gerentes__text__content').css('opacity', '0');
                $('.gerentes__item[data-number="'+data+'"]').siblings().find('.gerentes__text').hide();
                $('.gerentes__item[data-number="'+data+'"]').addClass('gerentes__active');
                $('.gerentes__item[data-number="'+data+'"]').siblings().removeClass('gerentes__active');
            });
        }
        $('.gerentes__close').click(function() {
            var $this = $(this);
            $('.gerentes__item').find('.gerentes__text').slideUp(300, function() {
                $('.flecha').slideUp();
            });
            $('.gerentes__item').removeClass('gerentes__active');
            $('.relleno').slideUp();
            $('.gerentes__item').animate({paddingBottom : 0}, 300);
            $('.gerentes--flex').animate({opacity : 1});
        });
    }
    function formulario() {
        $('.message__link').click(function() {
            $(this).parents('.message').fadeOut();
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function mercado() {
        var oculto = $('.item-hide'),
            btn = $('.js-more'),
            close = $('.mercado__close');
        btn.click(function() {
            var $this = $(this).parent(),
                index = 5;
            if(windowSize < 740) {
                $('.item-hide').each(function(number) {
                    $this.find('.item-hide-'+index).delay(400*number).fadeIn(300);
                    index++;
                });
                $(this).fadeOut(function() {
                    $this.addClass('container--open');
                });
            } else {
                var container = $('.mercado__lightbox'),
                    content = $('.mercado__container');
                $this.clone().appendTo('.mercado__content');
                container.find('.indices__container').addClass('container__lightbox');
                container.fadeIn();
            }
        });
        close.click(function() {
            var content = $(this).parent().find('.mercado__content'),
                container = $(this).parents('.mercado__lightbox');
            container.fadeOut(function() {
                content.empty()
            });
        });
    }
    function isiPhone(){
        return (
            (navigator.platform.indexOf("iPhone") != -1) ||
            (navigator.platform.indexOf("iPod") != -1)
        );
    }
    if(isiPhone()){
        $('.header--bottom').addClass('menu__iphone');
    }
    function explorer() {
        if ( ! Modernizr.objectfit ) {
            $('.banner').each(function () {
                var $container = $(this),
                    imgUrl = $container.find('img').prop('src');
                if (imgUrl) {
                    $container
                        .css('backgroundImage', 'url(' + imgUrl + ')')
                        .addClass('banner-object-fit');
                }  
            });
        }
        if(Function('/*@cc_on return document.documentMode===10@*/')()){ $("html").addClass("ie10"); }
    }
    if(windowSize < 740) {
        indices();
    }
    headeMobile();
    subMenu();
    inputFile();
    checkbox();
    gerentes();
    formulario()
    popupLinks();
    mercado();
    explorer();
})(jQuery);
