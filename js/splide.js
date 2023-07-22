
var splide = new Splide( '.splide', {
  type   : 'loop',
  perPage: 4,
  perMove: 1,
  autoplay: true, // Enable autoplay
  interval: 5000, // Set the interval between slides (in milliseconds)
} );

splide.mount();

var splide2 = new Splide( '.splide2', {
    type   : 'loop',
    padding: '5rem',
    autoplay: true, // Enable autoplay
    interval: 5000, // Set the interval between slides (in milliseconds)
  } );
  
  splide2.mount();