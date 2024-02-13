window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        //jq start below




        //desktop whatsappBox start


        function desktopWhatsappBox() {
            function dwb() {
                var $whatsappBox = jQuery('#wa-pr');
                var $waOpen = jQuery('.wa-open');
                var $greeting = jQuery('#grt');
                var $sw = jQuery(window).width();


                $whatsappBox.slideUp();



                if ($sw > 541) {
                    $greeting.show();

                    //open
                    jQuery($waOpen).on('click', function (e) {
                        e.preventDefault();
                        jQuery($greeting).slideUp();
                        $whatsappBox.slideDown();
                    });

                    //close
                    jQuery('.wa-close ').on('click', function () {
                        $whatsappBox.slideUp();
                        $greeting.slideDown();
                        jQuery('#mobap').slideUp();
                    });





                } else {
                    $greeting.hide();

                    //open
                    jQuery($waOpen).on('click', function (e) {
                        e.preventDefault();
                        jQuery($greeting).slideUp();
                        $whatsappBox.slideDown();
                        jQuery('#mobap').slideUp();
                        jQuery('#hero-data').slideUp();
                    });
                    //close
                    jQuery('.wa-close ').on('click', function () {
                        jQuery('#hero-data').slideDown();
                        jQuery('#mobap').slideDown();
                        $whatsappBox.slideUp();
                    });


                }
            }


            dwb();
            jQuery(window).resize(function () {
                dwb();
            });
        }
        desktopWhatsappBox();




        //desktop whatsappBox end



        //mobile-menu start

        function headerMenu() {

            function hm() {

                var mmcta = jQuery('#mmcta');
                mmcta.hide();

                $screenWidth = jQuery(window).width();
                if ($screenWidth < 601) {
                    var closeHeaderMenu = '<div class="close-header-menu">X</div>';
                    jQuery('nav#header-nav').prepend(closeHeaderMenu);

                    //opem
                    jQuery('.header-menu-trigger').on('click', function () {
                        jQuery('nav#header-nav').addClass('active');
                        mmcta.show();
                        jQuery('nav#header-nav').prepend(mmcta);
                    });

                    //close
                    jQuery('.close-header-menu').on('click', function () {
                        jQuery('nav#header-nav').removeClass('active');
                        mmcta.hide();
                    });
                } else {
                    jQuery('nav#header-nav .close-header-menu').remove();
                    jQuery('nav#header-nav .header-menu-trigger').remove();
                    mmcta.hide();
                }
            }
            hm();
            //resize
            jQuery(window).resize(function () {
                hm();
            });
        }
        headerMenu();




        //mobile-menu start



        //find this

        function mm_find_image_width_height() {
            var imgs = jQuery('img.find-this');
            imgs.each(function () {
                var ini = jQuery(this);
                var w = ini.width();
                var h = ini.height();
                ini.attr('width', w);
                ini.attr('height', h);
            });
        }

        // Fungsi debounce untuk membatasi frekuensi pemanggilan fungsi
        function mm_debounce(func, wait, immediate) {
            var timeout;
            return function () {
                var context = this, args = arguments;
                var later = function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                var callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        };

        // Event listener untuk resize window dengan debouncing
        jQuery(window).resize(mm_debounce(function () {
            mm_find_image_width_height();
            adsBeforeHeader();
        }, 250));

        mm_find_image_width_height();

        //find this















        //jq end above

    });


});