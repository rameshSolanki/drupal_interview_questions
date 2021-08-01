$(document).ready( function () {
    $('#example').DataTable();
} );

<!-- Particle effect canvas -->
	
	<!-- Particle effect scripts -->
	
		window.onload = function() {
		  Particles.init({
		    selector: '.background'
		  });
		};
	$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
$(document).ready(function(){
	Spotlight.show(myGallery,{

  // "fade", "slide", "scale", and "rotate"
  animation: "slide",

  /* shows/hides controls
    "theme",
    "fullscreen",
    "autofit",
    "zoom-in",
    "zoom-out",
    "page",
    "title",
    "description",
    "player"
  */
  control: ["autofit", "zoom"],

  // auto hides the controls
  autohide: true,

  // shows fullscreen toggle button
  fullscreen: true,

  // shows zoom buttons
  zoom: true,

  // shows zoomIn button
  zoomin: true,

  // shows zoomOut button
  zoomout: true,

  // shows reset button
  reset: true,

  // shows theme switch button
  theme: true,

  // shows autoplay button
  player: true,

  // infinite mode
  infinite: true,

  // "white" or "dark"
  theme: "white",

  // shows pages
  page: true,

  // shows image preloader
  preloader: true,

  // enables image prefetching
  prefetch: true

});});