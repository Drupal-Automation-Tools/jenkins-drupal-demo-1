// Using the closure to map jQuery to $.
(function ($) {
  // Store our function as a property of Drupal.behaviors.
  Drupal.behaviors.mega_menu = function (context) {
    $(window).resize(function() {
      var width = $(window).width();
      if (width < 480 && width > 320) {
        $('body').css('background', '#000');
      }
    });
  };
}(jQuery));
