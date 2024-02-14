window.addEventListener('DOMContentLoaded', function () {

    jQuery(function () {

        function mm_updateSubmitVisibility() {
            var allFilled = true;
            jQuery('.wf-item input, .wf-item textarea').each(function () {
                if (jQuery(this).val() === '') {
                    allFilled = false;
                    return false; // break the loop
                }
            });
            jQuery('#waf-submit').toggle(allFilled);
        }

        jQuery('.wf-item input, .wf-item textarea').on('keyup change', function () {
            mm_updateSubmitVisibility();
        });

        jQuery('#waf-submit').click(function (e) {
            e.preventDefault();
            var phone = jQuery('.waf-wr').data('phone-url');
            var nama = jQuery('#waf-name').val();
            var email = jQuery('#waf-email').val();
            var phoneNum = jQuery('#waf-phone').val();
            var subject = jQuery('#waf-subject').val();
            var message = jQuery('#waf-message').val();
            var fullMessage = `Nama: ${nama}\nEmail: ${email}\nNo. HP: ${phoneNum}\nSubjek: ${subject}\nPesan: ${message}`;
            window.open(`https://wa.me/${phone}?text=${encodeURIComponent(fullMessage)}`, '_blank');
        });

        // Initialize visibility based on form state at page load
        mm_updateSubmitVisibility();
    });

});

