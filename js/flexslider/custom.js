(function($) {
  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "fade",
      animationLoop: false,
      itemWidth: 1170,
      itemMargin: 5,
      pausePlay: false,
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });
})( jQuery );  