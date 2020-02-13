jQuery( document ).ready( function( $ ) {
    $('#mobile-nav-toggle').click(function () {
        let myclass = $(this).getElementsByClassName('bar');
        alert(myclass);
    })
});