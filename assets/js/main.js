(function() {

  $(window).load(function() {
    $('#slider').nivoSlider({
      pauseTime: 4000,
      animSpeed: 1000
    });
    return $("#scroller").simplyScroll({
      autoMode: 'loop',
      orientation: 'vertical'
    });
  });

}).call(this);
