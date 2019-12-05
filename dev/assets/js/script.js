$( document ).ready(function() {

    let menuFooter = false;

    $('#hamburgerBtn').click(function(){
        if ($('.hamburger-menu-dropdown').css('display') === 'none') {
            $('.hamburger-menu-dropdown').css('display', 'flex');
        } else {
            $('.hamburger-menu-dropdown').css('display', 'none');
        }

        if ($('.page-content').css('display') === 'block') {
            $('.page-content').css('display', 'none');
        } else {
            $('.page-content').css('display', 'block');
        }

        if ( menuFooter === false) {
            menuFooter = true;
            $('#footerContainer').addClass('menu-footer');
        } else {
            menuFooter = false;
            $('#footerContainer').removeClass('menu-footer');
        }
    });

    // let pageContentHeight = $('.page-content').height();
    // let viewportHeight = (document.documentElement.clientHeight, window.innerHeight);
    //
    // if (pageContentHeight <= viewportHeight) {
    //     console.log('not whole pg');
    // }
});
