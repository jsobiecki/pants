(function ($) {

  Drupal.behaviors.changePants = {
    attach: function (context, settings) {
      $('a#pants').click(function() {
        $.get(settings.basePath + 'pants/change/' + settings.uid, function(result) {
            $(".pants-status").html(result).fadeIn("slow");
        });
        return false;
      });
    }
  }

})(jQuery);
