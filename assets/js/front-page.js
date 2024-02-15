window.addEventListener('DOMContentLoaded', (event) => {






    //counter number start
    function counterNumber() {
        var $num = jQuery('.list-num');
        $num.each(function () {
            var $this = jQuery(this);
            if (!$this.hasClass('counted')) {
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    },
                    complete: function () {
                        $this.addClass('counted');
                    }
                });
            }
        });
    }

    var hasCounted = false; // Tambahkan flag untuk memeriksa apakah animasi sudah dijalankan

    jQuery(window).scroll(function () {
        if (!hasCounted) { // Cek jika animasi belum dijalankan
            var hT = jQuery('#about').offset().top,
                hH = jQuery('#about').outerHeight(),
                wH = jQuery(window).height(),
                wS = jQuery(this).scrollTop();
            if (wS > (hT + hH - wH)) {
                counterNumber();
                hasCounted = true; // Setelah dijalankan, set flag menjadi true
            }
        }
    });



    //counter number end





    //show hero banner start


    function heroBanner() {
        function launch() {
            setTimeout(function () {
                jQuery('#hero-data').addClass('active');

                setTimeout(function () {
                    jQuery('#hero-data').addClass('final');
                }, 1000);

            }, 1000);
        }
        launch();
    }
    heroBanner();


    //show hero banner end







    function rekananList() {
        jQuery('.rekanan-list').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: false,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
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

    }
    rekananList();


    //testimonial list start


    function testimonialList() {
        jQuery('.testi-list').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            autoplay: false,
            autoplaySpeed: 2000,
            arrows: false,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

    }
    testimonialList();

    //testimonial list end




});