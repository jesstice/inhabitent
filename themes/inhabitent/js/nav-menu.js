/**
 * nav-menu.js
 *
 * Adds search bar toggle.
 *
 */

(function ($) {
  $(function () {
    // Search bar toggle
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

    // Change nav bar css
    var $homeHero = $('.home-banner').height();
    var $aboutHero = $('.about-hero').height();
    var $adventureHero = $('.adventure-header').height();

    var $navBar = $('#masthead');
    var $logo = $('.nav-menu-logo');
    var $searchIcon = $('.search-submit');
    var $navText = $('.nav-menu-search');

    function changeNavBar(position, hero) {
      if (position > hero) {
        $navBar.removeClass('site-header-hero');
        $logo.removeClass('nav-menu-logo-hero');
        $searchIcon.removeClass('search-submit-hero');
        $navText.removeClass('nav-menu-search-hero');
      } else {
        $navBar.addClass('site-header-hero');
        $logo.addClass('nav-menu-logo-hero');
        $searchIcon.addClass('search-submit-hero');
        $navText.addClass('nav-menu-search-hero');
      }
    }

    $(document).scroll(function() {
      var $position = $(this).scrollTop();
      
      if ($('.home').length) {
        changeNavBar($position, $homeHero);
      }
      if ($('.page-template-about').length) {
        changeNavBar($position, $aboutHero);
      }
      if ($('.single-adventure').length) {
        console.log($adventureHero);
        changeNavBar($position, $adventureHero);
      }

    });

  });
})(jQuery);