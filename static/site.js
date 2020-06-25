jQuery('#mobile-nav-toggle').click(function () {
    jQuery('#nav-main').slideToggle('.2s');
    jQuery(this).children().toggleClass("open");
});
