$(window).load ->
  $('#slider').nivoSlider
    pauseTime: 4000
    animSpeed: 1000
  $('#scroller').simplyScroll
    autoMode: 'loop'
    orientation: 'vertical'
  $('.colorbox').colorbox
    rel: true
    maxWidth: "90%"
    maxHeight: "90%"
