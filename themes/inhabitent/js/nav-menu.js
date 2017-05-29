/**
 * nav-menu.js
 *
 * Adds search bar toggle.
 *
 */

(function ($) {
  $(function () {

    $('.icon-search').click( function(event){
      event.stopPropagation();
      event.preventDefault();
      $('.main-navigation .search-field').toggle('fast');
    });

    $(document).click( function(event) {
      if ( !$('.main-navigation .search-field').is(event.target) ) {
        $('.main-navigation .search-field').hide('fast');
      }
    });

  });
})(jQuery);