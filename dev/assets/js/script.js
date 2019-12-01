$( document ).ready(function() {

    $('#hamburgerBtn').click(function(){
        if ($('.hamburger-menu-dropdown').css('display') === 'none') {
            $('.hamburger-menu-dropdown').css('display', 'flex');
        } else {
            $('.hamburger-menu-dropdown').css('display', 'none');
        }

        if ($('.index-page-content').css('display') === 'block') {
            $('.index-page-content').css('display', 'none');
        } else {
            $('.index-page-content').css('display', 'block');
        }

        // if ($('.footer-container-page').css('display') === 'flex') {
        //     $('.footer-container-page').css('display', 'none');
        // } else {
        //     $('.footer-container-page').css('display', 'flex');
        // }

    });
});
