window.addEventListener('DOMContentLoaded', (event) => {

    jQuery(function () {

        //jquery start



        //replace h2 in #the-content with tittle start


        function replaceTitle() {

            //if body has class tag
            if (jQuery('body').hasClass('tag')) {
                var title = jQuery('h1#content-title').text();
                jQuery('#the-content h2').text(title);
            }
        }
        replaceTitle();




        //replace h2 in #the-content with tittle end







        //jquery end

    });


});