var preloader = $('.preloader'),
    imagesCount = $('img').length,
    dBody = $('body'),
    percent = 100 / imagesCount,
    progress = 0,
    imgSum = $('img').length,
    loadedImg = 0;


for (var i = 0; i < imagesCount; i++) {
    var img_copy = new Image();
    img_copy.src = document.images[i].src;
    img_copy.onload = img_load;
    img_copy.onerror = img_load;
}

function img_load() {
    progress += percent;
    loadedImg++;
    $('.preloader__loading').css('width', `${progress}vw`)
    // $('.circle__load').css('stroke-dashoffset', `${progress}%`)
    $('.preloader__percent span').text(progress.toFixed(0))
    if (progress >= 100 || loadedImg == imagesCount) {

        // setTimeout(function () {
        //     $('.section__main').removeClass('active')
        // }, 600)

        // setTimeout(function () {
        //     $('.section__main').addClass('active')
        // }, 3800)

        setTimeout(function () {
            $('.preloader-road').addClass('active')
        }, 600)
        setTimeout(function () {
            preloader.delay(500).fadeOut('slow');
        }, 3200)
        dBody.css('overflow', '');
    }
}

const logo = document.querySelectorAll('.circle circle');

for (let i = 0; i < logo.length; i++) {
    const path = logo[i];
    const length = path.getTotalLength();
    console.log(`Letter ${i} is ${length}`);
}


$(window).on('load', function () {


    // let changeSlideIndex = () => {
    //     let totalSLides = $('.fullPage .section').length
    //     let currentSlideIndex = $('.fullPage .section.active').index('.fullPage .section')
    //     currentSlideIndex += 1
    //     $('.slide__length').text(totalSLides)
    //     $('.slide__currents').text(currentSlideIndex)
    // }
    //
    // const $isAnimatedTitle = $('.general__animate')



    $('#fullPage').fullpage({
        anchors: ['main', 'services', 'production', 'maps', 'product', 'news', 'productiontwo', 'partners', 'feedback', 'contact'],
        menu: '.list',
        onLeave: (origin, destination, direction) => {
            const section = destination.item;
            const text = section.querySelector('.general__subtitle');
            const buttons = section.querySelector('.section__buttons');
            const topBlock = section.querySelector('.topBlock');
            const tl = new TimelineMax();
            const lefttoright = section.querySelector('.left-to-right')
            const righttoleft = section.querySelector('.right-to-left')
            tl.fromTo(text, 0.5, {y: "50", opacity: 0}, {y: "0", opacity: 1}, .5);
            tl.fromTo(buttons, 0.5, {y: "50", opacity: 0}, {y: "0", opacity: 1}, .5);
            tl.fromTo(lefttoright, 0.5, {x: "-100", opacity: 0}, {x: "0", opacity: 1}, .5);
            tl.fromTo(righttoleft, 0.5, {x: "100", opacity: 0}, {x: "0", opacity: 1}, .5);

            if (destination.index == 2) {
                const numb = section.querySelector('.right__content-one')
                tl.fromTo(numb, 0.5, {x: "-150", opacity: 0}, {x: "0", opacity: 1}, .5);
                setTimeout(() => {
                    $('.box h4 span').each(function () {
                        $(this).prop("col", 0).animate({
                            counter: $(this).text()
                        }, {
                            duration: 3500,
                            easing: "swing",
                            step: function (now) {
                                $(this).text(Math.floor(now));
                            }
                        });
                    });
                }, 1400)
            }

        },
        // afterLoad: changeSlideIndex
    });


    // $('.fp-left').append('<svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
    //     '<path fill-rule="evenodd" clip-rule="evenodd" d="M25.1923 11.3149V19.5774C25.1923 24.7392 21.0079 28.9236 15.8462 28.9236C10.6844 28.9236 6.5 24.7392 6.5 19.5775V11.3149C6.5 6.15317 10.6844 1.96875 15.8462 1.96875C21.0079 1.96875 25.1923 6.15317 25.1923 11.3149ZM5.5 11.3149C5.5 5.60089 10.1321 0.96875 15.8462 0.96875C21.5602 0.96875 26.1923 5.60088 26.1923 11.3149V19.5774C26.1923 25.2915 21.5602 29.9236 15.8462 29.9236C10.1321 29.9236 5.5 25.2915 5.5 19.5775V11.3149ZM16.463 14.8325C16.463 14.5563 16.2391 14.3325 15.963 14.3325C15.6869 14.3325 15.463 14.5563 15.463 14.8325L15.463 22.7417C15.463 23.0178 15.6869 23.2417 15.963 23.2417C16.2391 23.2417 16.463 23.0178 16.463 22.7417L16.463 14.8325Z" fill="white"/>\n' +
    //     '</svg>')
    //
    // $('.fp-left').prepend('\n' +
    //     '    <div class="slide__numbers">\n' +
    //     '        <span class="slide__currents">1</span>\n' +
    //     '          <span class="ll">/</span>\n' +
    //     '        <span class="slide__length">10</span>\n' +
    //     '    </div>')


    var t1 = new TimelineMax({paused: true});

    if ($(window).width() <= 1100.98) {
        t1.to(".menu", .8, {
            width: "100vw",
        });
    } else {
        t1.to(".menu", .8, {
            width: "35vw",
        });

    }

    t1.staggerFrom(".menu ul li", .5, {opacity: 0, y: 10, ease: Expo.easeOut}, 0.1);
    t1.reverse();

    //==============Begin calc=================

    // $('.timeline-seminar').css('display', 'block')
    // $('.timeline-type__seminar').addClass('active')

    // $('.timeline-type__seminar').click(() => {
    //     $('.timeline-type__event').removeClass('active')
    //     $('.timeline-type__seminar').addClass('active')
    //     $('.timeline-event').css('display', 'none')
    //     $('.timeline-seminar').css('display', 'block')
    //     showTimelineYear($('.timeline-years span').length-1)
    // })


    let calcButtons = index => {
        $('.calc__container-top button').removeClass('active')
        $('.stages__container').css('display', 'none')
        $('.stages__container').removeClass('stages__container-active')
        $('.stages__container').css('opacity', '0')
        $('.calc__container-top button').eq(index).addClass('active')
        $('.stages__container').eq(index).css('display', 'block')
        $('.stages__container').eq(index).addClass('stages__container-active')
        setTimeout(() => {
            $('.stages__container').eq(index).css('opacity', '1')
        }, 500)
    }
    calcButtons($('.calc__container-top button').length - 3)

    $('.calc__container-top button').click(function (event) {
        event.preventDefault();
        let index = $(this).index('.calc__container-top button')
        calcButtons(index)
    })

    $('.banner__bottom-right').click(function () {
        $('.calc').fadeIn('200')
    });
    $('.calc__back').click(function () {
        $('.calc').fadeOut('200')
    })

    //==============End calc=================

    $('.two__info-checkboxes label input').click(function () {
        if ($(this).prop("checked") == true) {
            $(this).parent('label').addClass('checkedbox')
        } else if ($(this).prop("checked") == false) {
            $(this).parent('label').removeClass('checkedbox')
        }
    });

    $('.header__mnu').click(function () {
        t1.reversed(!t1.reversed());
    });
    $('.menu__close').click(function () {
        t1.reversed(!t1.reversed());
    });

    $('.slideDown').click(function () {
        $('.single__top-container').slideToggle('200');
        $('.slideDown').toggleClass('active');
    });
    $('.feedback__btn, .product__btn, .general__feedback-btn').click(function (event) {
        event.preventDefault()
        $('.feedback').fadeIn('200')
    });
    $('.feedback__close').click(function () {
        $('.feedback').fadeOut('200')
    })

    $(".right__content-one div").hover(function () {
            $("div.right__content-one div").not(this).removeClass("active");
            $(this).addClass("active");
            $('.right__banner-one').removeClass('active');
            let src = $(this).children('img').attr('src');
            setTimeout(function () {
                $('.right__banner-one').attr('src', src);
                $('.right__banner-one').addClass('active')
            }, 800);
            console.log(src)
        }
    );

    $(".map__btns div").click(function () {
            $("div.map__btns div").not(this).removeClass("active");
            $(this).addClass("active");
            $('.map__popup').animate({right: -500, opacity: "hide"}, 500);
            let src = $(this).children('img').attr('src');
            let href = $(this).children('a').attr('href');
            setTimeout(function () {
                $('.map__popup-bg').attr('src', src);
                $('.map__popup-btn').attr('href', href);
                $('.map__popup').animate({right: 0, opacity: "show"}, 500);
            }, 1000);
            console.log(src)
        }
    );
    $('.map__popup-close').click(function () {
        $("div.map__btns div").not(this).removeClass("active");
        $('.map__popup').animate({right: -500, opacity: "hide"}, 500);
    })

    $(".right__content-two div").hover(function () {
            $("div.right__content-two div").not(this).removeClass("active");
            $(this).addClass("active");
            $('.right__banner-two').removeClass('active');
            let src = $(this).children('img').attr('src');
            setTimeout(function () {
                $('.right__banner-two').attr('src', src);
                $('.right__banner-two').addClass('active')
            }, 800);
            console.log(src)
        }
    );

    let owlProduct = $('.product__slider');
    owlProduct.owlCarousel({
            loop: false,
            nav: true,
            dots: true,
            center: false,
            autoWidth: true,
            margin: 0,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    onInitialized: false,
                    onTranslate: false,
                    dots: true,
                    items: 1
                },
                600: {
                    items: 2,
                    slideBy: 2
                },
                1300: {
                    items: 2,
                    slideBy: 2
                }
            },
        },
        $('.product__slider-next').click(function () {
            owlProduct.trigger('next.owl.carousel');
        }),
        $('.product__slider-prev').click(function () {
            owlProduct.trigger('prev.owl.carousel', [300]);
        })
    );


    let owlNews = $('.news__slider');
    owlNews.owlCarousel({
            loop: false,
            nav: true,
            dots: true,
            center: false,
            autoWidth: false,
            margin: 25,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    onInitialized: false,
                    onTranslate: false,
                    dots: true,
                    items: 1
                },
                600: {
                    items: 2
                },
                1300: {
                    items: 3
                }
            },
        },
        $('.news__slider-next').click(function () {
            owlNews.trigger('next.owl.carousel');
            console.log(123)
        }),
        $('.news__slider-prev').click(function () {
            owlNews.trigger('prev.owl.carousel', [300]);
        }),
    );

    let owlTech = $('.tech__slider');
    owlTech.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            center: false,
            autoWidth: true,
            margin: 0,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    onInitialized: false,
                    onTranslate: false,
                    dots: true,
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            },
        }
    );

    let owlProduction = $('.production__slider');
    owlProduction.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            center: false,
            autoWidth: false,
            margin: 25,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    margin: 0,
                    dots: false,
                    items: 1
                }
            },
        },
        $('.production__slider-next').click(function () {
            owlProduction.trigger('next.owl.carousel');
            console.log(123)
        }),
        $('.production__slider-prev').click(function () {
            owlProduction.trigger('prev.owl.carousel', [300]);
        }),
    );

    let owlRecommended = $('.recommended__slider');
    owlRecommended.owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            center: false,
            autoWidth: false,
            margin: 25,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    margin: 0,
                    dots: false,
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3.4
                }
            },
        }
    );

    let owlService = $('.service__slider');
    owlService.owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            center: false,
            autoWidth: false,
            margin: 25,
            dotsContainer: '#general__slider-dots',
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    margin: 0,
                    dots: false,
                    items: 1
                }
            },
        },
        $('.service__slider-next').click(function () {
            owlService.trigger('next.owl.carousel');
            console.log(123)
        }),
        $('.service__slider-prev').click(function () {
            owlService.trigger('prev.owl.carousel', [300]);
        }),
    );

    let owlPartner = $('.partners__slider');
    owlPartner.owlCarousel({
            loop: true,
            nav: true,
            dots: true,
            center: false,
            autoWidth: false,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 6000,
            autoplaySpeed: 6000,
            autoplayHoverPause: true,
            margin: 0,
            // autoplayHoverPause: true,
            responsive: {
                0: {
                    onInitialized: false,
                    onTranslate: false,
                    dots: true,
                    items: 1
                },
                600: {
                    items: 3
                },
                1300: {
                    items: 4
                }
            },
        },
        $('.partners__slider-next').click(function () {
            owlPartner.trigger('next.owl.carousel');
            console.log(123)
        }),
        $('.partners__slider-prev').click(function () {
            owlPartner.trigger('prev.owl.carousel', [300]);
        }),
    );

    var owlPartnersAuto = $('.partners__slider-auto');
    owlPartnersAuto.owlCarousel({
        items: 4,
        loop: true,
        margin: 10,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 6000,
        autoplaySpeed: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                margin: 20,
                items: 1,
                stagePadding: 50
            },
            550: {
                margin: 20,
                items: 3,
            },
            900: {
                items: 4,
                margin: 20,
            },
            1300: {
                margin: 24,
                items: 4,
            }
        }
    });

    var owlProductsAbout = $('.about__products-slider');
    owlProductsAbout.owlCarousel({
        items: 1,
        loop: true,
        animateOut: 'fadeOut',
        margin: 0,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    //___________TIMELINE-CAROUSEL___________


    $('.timeline-seminar').css('display', 'block')
    $('.timeline-type__seminar').addClass('active')

    $('.timeline-type__seminar').click(() => {
        $('.timeline-type__event').removeClass('active')
        $('.timeline-type__seminar').addClass('active')
        $('.timeline-event').css('display', 'none')
        $('.timeline-seminar').css('display', 'block')
        showTimelineYear($('.timeline-years span').length - 1)
    })

    let showTimelineYear = index => {
        $('.timeline-years span').removeClass('active')
        $('.timeline__year').css('display', 'none')
        $('.timeline__year').removeClass('timeline__year-active')
        $('.timeline__year').css('opacity', '0')
        $('.timeline-years span').eq(index).addClass('active')
        $('.timeline__year').eq(index).css('display', 'block')
        $('.timeline__year').eq(index).addClass('timeline__year-active')
        setTimeout(() => {
            $('.timeline__year').eq(index).css('opacity', '1')
        }, 500)
    }
    showTimelineYear($('.timeline-years span').length - 1)

    $('.timeline-years span').click(function () {
        let index = $(this).index('.timeline-years span')
        showTimelineYear(index)
    })

    $('.timeline-carousel').owlCarousel({
        dots: false,
        nav: false,
        mouseDrag: true,
        smartSpeed: 700,
        autoWidth: true,
        responsive: {
            0: {
                items: 1,
            },
            550: {
                items: 1,
            },
            900: {
                items: 1,
            },
            1300: {
                margin: 24,
                items: 1,
            }
        }
    })


});
