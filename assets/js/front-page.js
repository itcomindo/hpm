window.addEventListener('DOMContentLoaded', (event) => {





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


    function testimonialList() {
        jQuery('.testi-list').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            autoplay: true,
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
});