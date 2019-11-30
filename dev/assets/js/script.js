$( document ).ready(function() {
    $('#hamburgerBtn').click(function(){
        if ($('.hamburger-menu-dropdown').css('display') === 'none') {
            $('.hamburger-menu-dropdown').css('display', 'flex');
        } else {
            $('.hamburger-menu-dropdown').css('display', 'none');
        }

        if      ($('.index-page-content').css('display') === 'block') {
            $('.index-page-content').css('display', 'none');
        } else if ($('.index-page-content').css('display') === 'none')  {
            $('.index-page-content').css('display', 'block');
        }

    });
});
