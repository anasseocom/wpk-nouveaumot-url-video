/**
 * External Dependencies
 */
import 'jquery';
import 'slick-carousel/slick/slick';

$(document).ready(() => {
  if ($('#top-content-slider').length) {

    var sliderNextArrow = document.getElementById('top-content-arrow');
    $("#top-content-slider").slick({
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
      prevArrow: null,
      nextArrow: sliderNextArrow,
    });

    if (window.innerWidth > 1300) {
      var leftmargin = ((window.innerWidth / 2) - 660);
      var rightArrow = ((window.innerWidth / 2) - 680);
      console.log(leftmargin + "px")
      document.getElementById('top-content').style.marginLeft = leftmargin+ "px";
      document.getElementById('top-content-arrow').style.right = rightArrow + "px";
    }  else {
      document.getElementById('top-content').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1300) {
        var leftmargin = ((window.innerWidth / 2) - 660);
        var rightArrow = ((window.innerWidth / 2) - 680);
        console.log(leftmargin + "px")
        document.getElementById('top-content').style.marginLeft = leftmargin+ "px";
        document.getElementById('top-content-arrow').style.right = rightArrow + "px";
      }  else {
        document.getElementById('top-content').style.marginLeft = "auto";
      }
  });
  }
});
