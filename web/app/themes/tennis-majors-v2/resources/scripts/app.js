/**
 * External Dependencies
 */
import 'jquery';
import 'slick-carousel/slick/slick';

$(document).ready(() => {

  if ($('#live-last-news').length) {
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

  if ($(".top-shows-slider").length) {

    if (window.innerWidth > 1310) {
      var leftMarginTopShow = ((window.innerWidth / 2) - 655);
      document.getElementById('top-shows-list').style.marginLeft = leftMarginTopShow + "px";
    }  else {
      document.getElementById('top-shows-list').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopShow = ((window.innerWidth / 2) - 655);
        document.getElementById('top-shows-list').style.marginLeft = leftMarginTopShow + "px";
      }  else {
        document.getElementById('top-shows-list').style.marginLeft = "auto";
      }
    });
  }

  if ($('#top-stories').length) {
    if (window.innerWidth > 1310) {
      var leftMarginTopStories = ((window.innerWidth / 2) - 655);
      document.getElementById('top-stories-slider').style.marginLeft = leftMarginTopStories+ "px";
    }  else {
      document.getElementById('top-stories-slider').style.marginLeft = "auto";
    }

    window.addEventListener('resize', function () {
      if (window.innerWidth > 1310) {
        var leftMarginTopStories = ((window.innerWidth / 2) - 655);
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
    var liveLastNewsExperienced = localStorage.getItem('liveLastNewsExperienced');
    var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));

    if(isHome) {
      if(liveLastNewsActive == "on" || liveLastNewsActive == null) {
        activeLiveLastNews()
        localStorage.setItem('liveLastNewsActive', 'on');
        if( vw < 640){
          hideLiveLastNews();
        }
      }

      if(liveLastNewsActive == "off") {
        hideLiveLastNews();
        var dateOff = new Date(parseInt(localStorage.getItem('lastUseToggleLiveLastNews')));
        var dateNow = new Date(Date.now());
        var hours = Math.abs(dateOff - dateNow) / 36e5;
        if(hours >= 12) {
          if( vw > 640){
            localStorage.setItem('liveLastNewsActive', 'on');
            localStorage.setItem('lastUseToggleLiveLastNews', null);
            activeLiveLastNews();
          }
        }
      }

      if(liveLastNewsExperienced == "on") {
        document.getElementById('live-last-news--toggle').classList.remove('live-last-news--not-experienced');
        document.getElementById('live-last-news--toggle').classList.add('live-last-news--experienced');
      } else {
        document.getElementById('live-last-news--toggle').classList.add('live-last-news--not-experienced');
      }
    } else {
      if(liveLastNewsActive == null) {
        hideLiveLastNews();
        localStorage.setItem('liveLastNewsActive', 'on');
      }

      if(liveLastNewsActive == "on") {
        hideLiveLastNews();
      }

      if(liveLastNewsActive == "off") {
        hideLiveLastNews();
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
        localStorage.setItem('lastUseToggleLiveLastNews', null);
        activeLiveLastNews();
      }
      localStorage.setItem('liveLastNewsExperienced', 'on');
      document.getElementById('live-last-news--toggle').classList.remove('live-last-news--not-experienced');
      document.getElementById('live-last-news--toggle').classList.add('live-last-news--experienced');
    });
  }

  if($('.slider-cards--arrow')) {
    $( ".slider-cards--arrow" ).hover(function() {
      $( "body" ).toggleClass("overflow-y-hidden h-100vh");
    });
  }

  if($('#menu')) {
    $( ".menu__primary .menu__list > .menu-item > a" ).hover(function() {
      var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
      if( vw > 640){
        $('.menu__primary .menu__list > .menu-item > a').parent().addClass("menu-item--not-active");
        $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--active");
        $(this).parent().addClass("menu-item--active");
        $(this).parent().removeClass("menu-item--not-active");
      }
    });

    var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
    if( vw < 640){
      $( ".menu__primary .menu__list > .menu-item > a" ).click(function() {
        if($(this).parent().hasClass('menu-item--active')) {
          $('.menu__primary .menu__list > .menu-item > a').parent().addClass("menu-item--not-active");
          $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--active");
        } else {
          $('.menu__primary .menu__list > .menu-item > a').parent().addClass("menu-item--not-active");
          $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--active");
          $(this).parent().toggleClass("menu-item--active");
          $(this).parent().removeClass("menu-item--not-active");
        }
      });
    }

    $( ".menu__primary .menu__list" ).hover(function() {
      var vw = (Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0));
      if( vw > 640){
        $( ".menu__primary .menu__list" ).toggleClass('menu--hovered');
        if(!$( ".menu__primary .menu__list" ).hasClass('menu--hovered')) {
          $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--not-active");
          $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--active");
        }
      }
    });

    var menuLinks = document.getElementsByClassName("menu-item");
    for (var i = 0; i < menuLinks.length; i++) {
      if(menuLinks[i].firstChild.getAttribute('href') == "#") {
        menuLinks[i].firstChild.removeAttribute('href');
      }
    }

    var menuContainerHeight  = document.getElementById('menu').offsetHeight;
    console.log(menuContainerHeight);
    var menuHeight  = document.getElementById('menu-primary').offsetHeight;
    console.log(menuHeight);
    var distanceFromTop = null
    if(menuContainerHeight > 670) {
      distanceFromTop = ((menuContainerHeight - menuHeight) / 2) - 15;
    } else {
      distanceFromTop = 150;
    }
    var subMenus = document.getElementsByClassName("sub-menu");
    for (var i = 0; i < subMenus.length; i++) {
      if(window.innerWidth > 768) {
        subMenus[i].style.height = 'calc(100vh - '+ distanceFromTop.toString() + 'px)';
      }
    }

    window.addEventListener('resize', function () {
      if(window.innerWidth < 768 && document.body.classList.contains('menu-is-active')) {
        for (var i = 0; i < subMenus.length; i++) {
          subMenus[i].style.height = 'auto';
        }
      }
  });
  }

    document.getElementById("burger").addEventListener("click", function(){
      $("#menu").toggleClass("menu--active");
      $("body").toggleClass("menu-is-active");
      $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--not-active");
      $('.menu__primary .menu__list > .menu-item > a').parent().removeClass("menu-item--active");

      var menuContainerHeight  = document.getElementById('menu').offsetHeight;
      console.log(menuContainerHeight);
      var menuHeight  = document.getElementById('menu-primary').offsetHeight;
      console.log(menuHeight);
      var distanceFromTop = null
      if(menuContainerHeight > 670) {
        distanceFromTop = ((menuContainerHeight - menuHeight) / 2);
      } else {
        distanceFromTop = 150;
      }
        var subMenus = document.getElementsByClassName("sub-menu");
      for (var i = 0; i < subMenus.length; i++) {
        if(window.innerWidth > 768) {
          subMenus[i].style.height = 'calc(100vh - '+ distanceFromTop.toString() + 'px)';
        }
      }
    });

    /* avoid old iframe and perform video to play in content */
    if($('.single')) {
      if($('.video-header')) {
    const bgv = $('.inherited-shortcode-video');

    if (bgv.is(':visible')) {
      $('source', bgv).each(
        function() {
          const el = $(this);
          el.attr('src', el.data('src'));
        }
      );

      bgv[0].load();
    }
  }
}
if($('.single')) {
  if($('.video-header')) {
const bgv = $('#player');

if (bgv.is(':visible')) {
  $('iframe', bgv).each(
    function() {
      const el = $(this);
      el.attr('src', el.data('src'));
    }
  );

  bgv[0].load();
}
}
}
  if($('.single')) {
    if($('.content')) {
      var content = document.getElementsByClassName('content')[0]
      var iframes = content.getElementsByTagName('iframe');

      for (var i = 0; i < iframes.length; i++) {
        var source = iframes[i].getAttribute('src');
        source = source.substring(0,19);
        var dailymotion = "https://www.dailymo";
        var youtube = "https://www.youtube";
        if(source == youtube || source == dailymotion) {
          var div = document.createElement("div");
          var parent = iframes[i].parentNode;
          parent.insertBefore(div, iframes[i]);
          div.appendChild(iframes[i]);
          iframes[i].parentNode.classList.add('video-container');
          iframes[i].classList.add('video');
        }
      }
    }
  }
});

