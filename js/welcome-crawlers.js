jQuery(document).ready(function() {
    //Never let the checkbox to be checked on.
    jQuery('#blog_public').on('change', function() {
        jQuery(this).prop('checked', false);
    });
});
