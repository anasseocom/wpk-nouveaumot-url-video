(self.webpackChunk=self.webpackChunk||[]).push([[742],{839:function(e,t,n){"use strict";n(609),n(154);var i=n(609);i(document).ready((function(){if(i("#live-last-news").length){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("live-last-news").style.marginLeft=e+"px"}else document.getElementById("live-last-news").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("live-last-news").style.marginLeft=e+"px"}else document.getElementById("live-last-news").style.marginLeft="auto"}))}if(i(".top-shows-slider").length){if(window.innerWidth>1310){var t=window.innerWidth/2-655;document.getElementById("top-shows-list").style.marginLeft=t+"px"}else document.getElementById("top-shows-list").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("top-shows-list").style.marginLeft=e+"px"}else document.getElementById("top-shows-list").style.marginLeft="auto"}))}if(i("#top-stories").length){if(window.innerWidth>1310){var n=window.innerWidth/2-655;document.getElementById("top-stories-slider").style.marginLeft=n+"px"}else document.getElementById("top-stories-slider").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("top-stories-slider").style.marginLeft=e+"px"}else document.getElementById("top-stories-slider").style.marginLeft="auto"}))}if(i("#major-team").length&&i("#major-team-slider").slick({speed:300,infinite:!0,slidesToShow:5,centerMode:!0,autoplay:!0,slidesToScroll:2,swipeToSlide:!0,prevArrow:null,nextArrow:null,responsive:[{breakpoint:1024,settings:{slidesToShow:3,infinite:!0,centerPadding:"10vw"}},{breakpoint:800,settings:{slidesToShow:1,infinite:!0,centerPadding:"20vw"}}]}),i("#major-page").length){if(window.innerWidth>1310){var s=window.innerWidth/2-655;document.getElementById("major-team-slider").style.marginLeft=s+"px"}else document.getElementById("major-team-slider").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("major-team-slider").style.marginLeft=e+"px"}else document.getElementById("major-team-slider").style.marginLeft="auto"}))}i("#shows-slider").length&&i("#shows-slider").slick({infinite:!0,speed:300,slidesToShow:1,centerMode:!0,prevArrow:null,nextArrow:null,variableWidth:!0});var l=!1,a=document.getElementsByClassName("prev-next");if(i(".prev-next").length){var o=new IntersectionObserver((function(e){e.forEach((function(e){if(l){if(e.isIntersecting){l=!1;for(t=0;t<a.length;t++)a[t].classList.remove("prev-next--hidden")}}else if(!e.isIntersecting){l=!0;for(var t=0;t<a.length;t++)a[t].classList.add("prev-next--hidden")}}))})),r=document.getElementById("player");o.observe(r)}function m(){c.style.display="block",c.classList.remove("live-last-news--hidden"),c.classList.add("live-last-news--active"),document.getElementById("live-last-news--toggle").classList.add("live-last-news--toggle-active")}function d(){c.classList.add("live-last-news--hidden"),c.classList.remove("live-last-news--active"),document.getElementById("live-last-news--toggle").classList.remove("live-last-news--toggle-active"),c.style.display="block"}if(i(".live-last-news").length){var c=document.getElementById("live-last-news"),u=document.body.classList.contains("home"),v=localStorage.getItem("liveLastNewsActive"),g=localStorage.getItem("liveLastNewsExperienced"),w=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0);if(u){if("on"!=v&&null!=v||(m(),localStorage.setItem("liveLastNewsActive","on"),w<640&&d()),"off"==v){d();var h=new Date(parseInt(localStorage.getItem("lastUseToggleLiveLastNews"))),f=new Date(Date.now());Math.abs(h-f)/36e5>=12&&w>640&&(localStorage.setItem("liveLastNewsActive","on"),localStorage.setItem("lastUseToggleLiveLastNews",null),m())}"on"==g?(document.getElementById("live-last-news--toggle").classList.remove("live-last-news--not-experienced"),document.getElementById("live-last-news--toggle").classList.add("live-last-news--experienced")):document.getElementById("live-last-news--toggle").classList.add("live-last-news--not-experienced")}else null==v&&(d(),localStorage.setItem("liveLastNewsActive","on")),"on"==v&&d(),"off"==v&&d();document.getElementById("live-last-news--toggle").addEventListener("click",(function(){var e=localStorage.getItem("liveLastNewsActive");"on"==e&&(localStorage.setItem("liveLastNewsActive","off"),localStorage.setItem("lastUseToggleLiveLastNews",Date.now()),d()),"off"==e&&(localStorage.setItem("liveLastNewsActive","on"),localStorage.setItem("lastUseToggleLiveLastNews",null),m()),localStorage.setItem("liveLastNewsExperienced","on"),document.getElementById("live-last-news--toggle").classList.remove("live-last-news--not-experienced"),document.getElementById("live-last-news--toggle").classList.add("live-last-news--experienced")}))}if(i(".slider-cards--arrow")&&i(".slider-cards--arrow").hover((function(){i("body").toggleClass("overflow-y-hidden h-100vh")})),i("#menu")){i(".menu__primary .menu__list > .menu-item > a").hover((function(){Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)>640&&(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active"),i(this).parent().addClass("menu-item--active"),i(this).parent().removeClass("menu-item--not-active"))})),(w=Math.max(document.documentElement.clientWidth||0,window.innerWidth||0))<640&&i(".menu__primary .menu__list > .menu-item > a").click((function(){i(this).parent().hasClass("menu-item--active")?(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active")):(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active"),i(this).parent().toggleClass("menu-item--active"),i(this).parent().removeClass("menu-item--not-active"))})),i(".menu__primary .menu__list").hover((function(){Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)>640&&(i(".menu__primary .menu__list").toggleClass("menu--hovered"),i(".menu__primary .menu__list").hasClass("menu--hovered")||(i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active")))}));for(var y=document.getElementsByClassName("menu-item"),p=0;p<y.length;p++)"#"==y[p].firstChild.getAttribute("href")&&y[p].firstChild.removeAttribute("href");var _=document.getElementById("menu").offsetHeight;console.log(_);var L=document.getElementById("menu-primary").offsetHeight;console.log(L);var E=null;E=_>670?(_-L)/2-15:150;var I=document.getElementsByClassName("sub-menu");for(p=0;p<I.length;p++)window.innerWidth>768&&(I[p].style.height="calc(100vh - "+E.toString()+"px)");window.addEventListener("resize",(function(){if(window.innerWidth<768&&document.body.classList.contains("menu-is-active"))for(var e=0;e<I.length;e++)I[e].style.height="auto"}))}if(document.getElementById("burger").addEventListener("click",(function(){i("#menu").toggleClass("menu--active"),i("body").toggleClass("menu-is-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active");var e=document.getElementById("menu").offsetHeight;console.log(e);var t=document.getElementById("menu-primary").offsetHeight;console.log(t);var n=null;n=e>670?(e-t)/2:150;for(var s=document.getElementsByClassName("sub-menu"),l=0;l<s.length;l++)window.innerWidth>768&&(s[l].style.height="calc(100vh - "+n.toString()+"px)")})),i(".single")&&i(".video-header")){var B=i(".inherited-shortcode-video");B.is(":visible")&&(i("source",B).each((function(){var e=i(this);e.attr("src",e.data("src"))})),B[0].load())}if(i(".single")&&i(".video-header")){var C=i("#player");C.is(":visible")&&(i("iframe",C).each((function(){var e=i(this);e.attr("src",e.data("src"))})),C[0].load())}if(i(".single")&&i(".content")){var x=document.getElementsByClassName("content")[0].getElementsByTagName("iframe");for(p=0;p<x.length;p++){var W=x[p].getAttribute("src");if("https://www.youtube"==(W=W.substring(0,19))||"https://www.dailymo"==W){var b=document.createElement("div");x[p].parentNode.insertBefore(b,x[p]),b.appendChild(x[p]),x[p].parentNode.classList.add("video-container"),x[p].classList.add("video")}}}}))},255:function(){},88:function(){},609:function(e){"use strict";e.exports=window.jQuery}},function(e){"use strict";var t=function(t){return e(e.s=t)};e.O(0,[692,126,941],(function(){return t(839),t(255),t(88)}));e.O()}]);
//# sourceMappingURL=app.js.map