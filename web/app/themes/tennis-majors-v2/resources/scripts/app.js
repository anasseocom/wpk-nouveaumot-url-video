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
      nextArrow: null,
      variableWidth: true,
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

  if ($('#archive-slider').length) {

    var archiveSliderNextArrow = document.getElementById('archive-slider-arrow');
    $("#archive-slider-slider").slick({
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
      prevArrow: null,
      nextArrow: archiveSliderNextArrow,
    });

    if (window.innerWidth > 1310) {
      var archiveLeftMarginTopNews = ((window.innerWidth / 2) - 655);
      var archiveRightArrowTopNews = ((window.innerWidth / 2) - 680);
      document.getElementById('archive-slider').style.marginLeft = archiveLeftMarginTopNews + "px";
      document.getElementById('archive-slider-arrow').style.right = archiveRightArrowTopNews + "px";
    }  else {
      document.getElementById('archive-slider').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var archiveLeftMarginTopNews = ((window.innerWidth / 2) - 655);
        var archiveRightArrowTopNews = ((window.innerWidth / 2) - 680);
        console.log(leftMarginTopNews + "px")
        document.getElementById('archive-slider').style.marginLeft = archiveLeftMarginTopNews+ "px";
        document.getElementById('archive-slider-arrow').style.right = archiveRightArrowTopNews + "px";
      }  else {
        document.getElementById('archive-slider').style.marginLeft = "auto";
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
      nextArrow: null,
    });

    if (window.innerWidth > 1024) {
      var leftMarginTopShow = ((window.innerWidth / 2) - 510);
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

  if ($('#top-stories').length) {
    $("#top-stories-slider").slick({
      infinite: false,
      speed: 300,
      centerMode: false,
      variableWidth: true,
      prevArrow: null,
      nextArrow: null,
    });

    if (window.innerWidth > 1310) {
      var leftMarginTopStories = ((window.innerWidth / 2) - 655);
      document.getElementById('top-stories-slider').style.marginLeft = leftMarginTopStories+ "px";
    }  else {
      document.getElementById('top-stories-slider').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopStories = ((window.innerWidth / 2) - 655);
        console.log(leftMarginTopNews + "px")
        document.getElementById('top-stories-slider').style.marginLeft = leftMarginTopStories+ "px";
      }  else {
        document.getElementById('top-stories-slider').style.marginLeft = "auto";
      }
    });
  }

  if ($('#major-team').length) {
    $("#major-team-slider").slick({
      infinite: false,
      speed: 300,
      infinite: true,
      slidesToShow: 3,
      centerPadding: '10%',
      centerMode: true,
      prevArrow: null,
      nextArrow: null,
    });
  }

  $("#shows-slider").slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    centerMode: true,
    prevArrow: null,
    nextArrow: null,
    variableWidth: true,
  });
});
