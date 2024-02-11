window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {


        //jq start


        function mmChangeHeading2() {
            //get all class from body if has class .tag

            function runScript() {

                if (jQuery('body').hasClass('tag')) {
                    var $title = jQuery('h1#content-title').text();
                    //replace #the-content h2 with the title
                    jQuery('#the-content h2').text($title);
                }
            }
            runScript();

            //resize event
            jQuery(window).resize(function () {
                runScript();
            });


        }
        mmChangeHeading2();





        //jq end


    });


});