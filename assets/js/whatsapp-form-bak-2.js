window.addEventListener('DOMContentLoaded', function () {

    jQuery(function () {

        function mm_validateField() {
            var isValidName = /^[A-Za-z\s]+$/.test(jQuery('#waf-name').val());
            var isValidEmail = /^\S+@\S+\.\S+$/.test(jQuery('#waf-email').val());
            var isValidPhone = /^[\d\s-]+$/.test(jQuery('#waf-phone').val());
            var isValidSubject = /^[A-Za-z\s]+$/.test(jQuery('#waf-subject').val());
            var isMessageFilled = jQuery('#waf-message').val() !== '';

            return isValidName && isValidEmail && isValidPhone && isValidSubject && isMessageFilled;
        }


        function mm_updateSubmitVisibility() {
            var allValid = mm_validateField();
            jQuery('#waf-submit').toggle(allValid);
        }

        jQuery('.wf-item input, .wf-item textarea').on('keyup change', function () {
            mm_updateSubmitVisibility();
        });

        jQuery('#waf-submit').click(function (e) {
            e.preventDefault();
            if (mm_validateField()) {
                var phone = jQuery('.waf-wr').data('phone-url');
                var nama = jQuery('#waf-name').val();
                var email = jQuery('#waf-email').val();
                var phoneNum = jQuery('#waf-phone').val();
                var subject = jQuery('#waf-subject').val();
                var message = jQuery('#waf-message').val();
                var fullMessage = `Nama: ${nama}\nEmail: ${email}\nNo. HP: ${phoneNum}\nSubjek: ${subject}\nPesan: ${message}`;
                window.open(`https://wa.me/${phone}?text=${encodeURIComponent(fullMessage)}`, '_blank');
            }
        });

        mm_updateSubmitVisibility();
    });

});
