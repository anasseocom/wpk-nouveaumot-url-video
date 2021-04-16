/**
 * External Dependencies
 */
import 'jquery';
import 'slick-carousel/slick/slick';

$(document).ready(() => {

  if ($('#live-last-news').length) {
    $("#live-last-news-slider").slick({
      infinite: false,
      speed: 300,
      slidesToShow: 3.5,
      centerMode: false,
      prevArrow: null,
      nextArrow: sliderNextArrow,
    });

    if (window.innerWidth > 1310) {
      var leftMarginTopLive = ((window.innerWidth / 2) - 655);
      console.log(leftMarginTopLive + "px")
      document.getElementById('live-last-news').style.marginLeft = leftMarginTopLive + "px";
    }  else {
      document.getElementById('live-last-news').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopLive = ((window.innerWidth / 2) - 655);
        console.log(leftMarginTopLive + "px")
        document.getElementById('live-last-news').style.marginLeft = leftMarginTopLive + "px";
      }  else {
        document.getElementById('live-last-news').style.marginLeft = "auto";
      }
    });
  }

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

    if (window.innerWidth > 1310) {
      var leftMarginTopNews = ((window.innerWidth / 2) - 655);
      var rightArrowTopNews = ((window.innerWidth / 2) - 680);
      console.log(leftMarginTopNews + "px")
      document.getElementById('top-content').style.marginLeft = leftMarginTopNews+ "px";
      document.getElementById('top-content-arrow').style.right = rightArrowTopNews + "px";
    }  else {
      document.getElementById('top-content').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopNews = ((window.innerWidth / 2) - 655);
        var rightArrowTopNews = ((window.innerWidth / 2) - 680);
        console.log(leftMarginTopNews + "px")
        document.getElementById('top-content').style.marginLeft = leftMarginTopNews+ "px";
        document.getElementById('top-content-arrow').style.right = rightArrowTopNews + "px";
      }  else {
        document.getElementById('top-content').style.marginLeft = "auto";
      }
    });
  }

  if ($(".top-shows-slider").length) {

    $(".top-shows-slider").slick({
      infinite: false,
      speed: 300,
      slidesToShow: 3.5,
      centerMode: false,
      prevArrow: null,
      nextArrow: sliderNextArrow,
    });

    if (window.innerWidth > 1024) {
      var leftMarginTopShow = ((window.innerWidth / 2) - 510);
      console.log(leftMarginTopShow + "px")
      document.getElementById('top-shows-list').style.marginLeft = leftMarginTopShow + "px";
    }  else {
      document.getElementById('top-shows-list').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1024) {
        var leftMarginTopShow = ((window.innerWidth / 2) - 510);
        console.log(leftMarginTopShow + "px")
        document.getElementById('top-shows-list').style.marginLeft = leftMarginTopShow + "px";
      }  else {
        document.getElementById('top-shows-list').style.marginLeft = "auto";
      }
    });
  }
});
