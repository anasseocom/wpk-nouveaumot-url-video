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
      responsive: [
        {
          breakpoint: 764,
          settings: "unslick",
        },
      ],
    });

    if (window.innerWidth > 1310) {
      var leftMarginTopLive = ((window.innerWidth / 2) - 655);
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

  if ($('#slider-cards').length) {
    var sliderNextArrow = document.getElementById('slider-cards--arrow');
    $("#slider-cards--slider").slick({
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
      prevArrow: null,
      nextArrow: sliderNextArrow,
    });
  }

  if ($(".top-shows-slider").length) {

    $(".top-shows-slider").slick({
      infinite: false,
      speed: 300,
      centerMode: false,
      variableWidth: true,
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
        console.log(leftMarginTopStories + "px")
        document.getElementById('top-stories-slider').style.marginLeft = leftMarginTopStories+ "px";
      }  else {
        document.getElementById('top-stories-slider').style.marginLeft = "auto";
      }
    });
  }

  if ($('#major-team').length) {
    $("#major-team-slider").slick({
      speed: 300,
      infinite: true,
      slidesToShow: 5,
      centerMode: true,
      prevArrow: null,
      nextArrow: null,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            infinite: true,
            centerPadding: '10vw',
          },
        },
        {
          breakpoint: 800,
          settings: {
            slidesToShow: 1,
            infinite: true,
            centerPadding: '20vw',
          },
        },
      ],
    });
  }

  if ($('#major-page').length) {
    $("#major-team-slider").slick({
      infinite: false,
      speed: 300,
      variableWidth: true,
      centerMode: false,
      prevArrow: null,
      nextArrow: null,
    });

    if (window.innerWidth > 1310) {
      var leftMarginTopMajor = ((window.innerWidth / 2) - 655);
      document.getElementById('major-team-slider').style.marginLeft = leftMarginTopMajor + "px";
    }  else {
      document.getElementById('major-team-slider').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopMajor = ((window.innerWidth / 2) - 655);
        document.getElementById('major-team-slider').style.marginLeft = leftMarginTopMajor + "px";
      }  else {
        document.getElementById('major-team-slider').style.marginLeft = "auto";
      }
    });
  }

  if ($('#shows-slider').length) {
    $("#shows-slider").slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      prevArrow: null,
      nextArrow: null,
      variableWidth: true,
    });
  }

  var isHidden = false;
  var prevnexts = document.getElementsByClassName('prev-next');

  if($('.prev-next').length) {
    let observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if(!isHidden) {
          if(!entry.isIntersecting) {
            isHidden = true;
            for (var i = 0; i < prevnexts.length; i++) {
              prevnexts[i].classList.add('prev-next--hidden');
            }
          }
        } else {
          if(entry.isIntersecting) {
            isHidden = false;
            for (var i = 0; i < prevnexts.length; i++) {
              prevnexts[i].classList.remove('prev-next--hidden');
            }
          }
        }
      });
    });
    
    let target = document.getElementById('player');
    observer.observe(target);
  }
  
  function activeLiveLastNews() {
    liveLastNews.style.display = "block";
    liveLastNews.classList.remove('live-last-news--hidden');
    liveLastNews.classList.add('live-last-news--active');
    document.getElementById('live-last-news--toggle').classList.add('live-last-news--toggle-active');
  }

  function hideLiveLastNews() {
    liveLastNews.classList.add('live-last-news--hidden');
    liveLastNews.classList.remove('live-last-news--active');
    document.getElementById('live-last-news--toggle').classList.remove('live-last-news--toggle-active');
    liveLastNews.style.display = "block";
  }

  if($('.live-last-news').length) {
    var liveLastNews = document.getElementById('live-last-news');
    var isHome = document.body.classList.contains('home');
    var liveLastNewsActive = localStorage.getItem('liveLastNewsActive');

    if(isHome) {
      if(liveLastNewsActive == "on" || liveLastNewsActive == null) {
        activeLiveLastNews()
        localStorage.setItem('liveLastNewsActive', 'on');
        var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
        if( vw > 640){
          hideLiveLastNews()
        }
      }

      if(liveLastNewsActive == "off") {
        hideLiveLastNews()
      }
    } else {
      if(liveLastNewsActive == null) {
        hideLiveLastNews()
        localStorage.setItem('liveLastNewsActive', 'on');
      }

      if(liveLastNewsActive == "on") {
        hideLiveLastNews();
      }

      if(liveLastNewsActive == "off") {
        hideLiveLastNews()
      }
    }

    document.getElementById("live-last-news--toggle").addEventListener("click", function(){
      var liveLastNewsActive = localStorage.getItem("liveLastNewsActive");
      if(liveLastNewsActive == 'on') {
        localStorage.setItem('liveLastNewsActive', 'off');
        localStorage.setItem('lastUseToggleLiveLastNews', Date.now());
        hideLiveLastNews();
      }
      
      if(liveLastNewsActive == 'off') {
        localStorage.setItem('liveLastNewsActive', 'on');
        localStorage.setItem('lastUseToggleLiveLastNews', Date.now());
        activeLiveLastNews();
      }
    });
  }

  if($('#menu')) {
    $( "#menu-menu-principal > .menu-item > a" ).hover(function() {
      var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
      if( vw > 640){
        $('#menu-menu-principal > .menu-item > a').parent().addClass("menu-item--not-active");
        $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--active");
        $(this).parent().addClass("menu-item--active");
        $(this).parent().removeClass("menu-item--not-active");
      }
    });

    var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
    if( vw < 640){
      $( "#menu-menu-principal > .menu-item > a" ).click(function() {
        if($(this).parent().hasClass('menu-item--active')) {
          $('#menu-menu-principal > .menu-item > a').parent().addClass("menu-item--not-active");
          $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--active");
        } else {
          $('#menu-menu-principal > .menu-item > a').parent().addClass("menu-item--not-active");
          $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--active");
          $(this).parent().toggleClass("menu-item--active");
          $(this).parent().removeClass("menu-item--not-active");
        }
      });
    }

    $( "#menu-menu-principal" ).hover(function() {
      var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
      if( vw > 640){
        $( "#menu-menu-principal" ).toggleClass('menu--hovered');
        if(!$( "#menu-menu-principal" ).hasClass('menu--hovered')) {
          $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--not-active");
          $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--active");
        }
      }
    });
  }

    document.getElementById("burger").addEventListener("click", function(){
      $("#menu").toggleClass("menu--active");
      $("body").toggleClass("menu-is-active");
      $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--not-active");
      $('#menu-menu-principal > .menu-item > a').parent().removeClass("menu-item--active");
    });
});

