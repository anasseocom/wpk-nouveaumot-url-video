(self.webpackChunk=self.webpackChunk||[]).push([[742],{839:function(e,t,n){"use strict";n(609),n(154);var i=n(609);i(document).ready((function(){if(i("#live-last-news").length){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("live-last-news").style.marginLeft=e+"px"}else document.getElementById("live-last-news").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("live-last-news").style.marginLeft=e+"px"}else document.getElementById("live-last-news").style.marginLeft="auto"}))}if(i(".top-shows-slider").length){if(window.innerWidth>1310){var t=window.innerWidth/2-655;document.getElementById("top-shows-list").style.marginLeft=t+"px"}else document.getElementById("top-shows-list").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;console.log(e+"px"),document.getElementById("top-shows-list").style.marginLeft=e+"px"}else document.getElementById("top-shows-list").style.marginLeft="auto"}))}if(i("#top-stories").length){if(window.innerWidth>1310){var n=window.innerWidth/2-655;document.getElementById("top-stories-slider").style.marginLeft=n+"px"}else document.getElementById("top-stories-slider").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;console.log(e+"px"),document.getElementById("top-stories-slider").style.marginLeft=e+"px"}else document.getElementById("top-stories-slider").style.marginLeft="auto"}))}if(i("#major-team").length&&i("#major-team-slider").slick({speed:300,infinite:!0,slidesToShow:5,centerMode:!0,prevArrow:null,nextArrow:null,responsive:[{breakpoint:1024,settings:{slidesToShow:3,infinite:!0,centerPadding:"10vw"}},{breakpoint:800,settings:{slidesToShow:1,infinite:!0,centerPadding:"20vw"}}]}),i("#major-page").length){if(i("#major-team-slider").slick({infinite:!1,speed:300,variableWidth:!0,centerMode:!1,prevArrow:null,nextArrow:null}),window.innerWidth>1310){var s=window.innerWidth/2-655;document.getElementById("major-team-slider").style.marginLeft=s+"px"}else document.getElementById("major-team-slider").style.marginLeft="auto";window.addEventListener("resize",(function(){if(window.innerWidth>1310){var e=window.innerWidth/2-655;document.getElementById("major-team-slider").style.marginLeft=e+"px"}else document.getElementById("major-team-slider").style.marginLeft="auto"}))}i("#shows-slider").length&&i("#shows-slider").slick({infinite:!0,speed:300,slidesToShow:1,centerMode:!0,prevArrow:null,nextArrow:null,variableWidth:!0});var a=!1,l=document.getElementsByClassName("prev-next");if(i(".prev-next").length){var o=new IntersectionObserver((function(e){e.forEach((function(e){if(a){if(e.isIntersecting){a=!1;for(t=0;t<l.length;t++)l[t].classList.remove("prev-next--hidden")}}else if(!e.isIntersecting){a=!0;for(var t=0;t<l.length;t++)l[t].classList.add("prev-next--hidden")}}))})),r=document.getElementById("player");o.observe(r)}function m(){u.style.display="block",u.classList.remove("live-last-news--hidden"),u.classList.add("live-last-news--active"),document.getElementById("live-last-news--toggle").classList.add("live-last-news--toggle-active")}function d(){u.classList.add("live-last-news--hidden"),u.classList.remove("live-last-news--active"),document.getElementById("live-last-news--toggle").classList.remove("live-last-news--toggle-active"),u.style.display="block"}if(i(".live-last-news").length){var u=document.getElementById("live-last-news"),c=document.body.classList.contains("home"),v=localStorage.getItem("liveLastNewsActive");if(c){if("on"==v||null==v)m(),localStorage.setItem("liveLastNewsActive","on"),Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)<640&&d();"off"==v&&d()}else null==v&&(d(),localStorage.setItem("liveLastNewsActive","on")),"on"==v&&d(),"off"==v&&d();document.getElementById("live-last-news--toggle").addEventListener("click",(function(){var e=localStorage.getItem("liveLastNewsActive");"on"==e&&(localStorage.setItem("liveLastNewsActive","off"),localStorage.setItem("lastUseToggleLiveLastNews",Date.now()),d()),"off"==e&&(localStorage.setItem("liveLastNewsActive","on"),localStorage.setItem("lastUseToggleLiveLastNews",Date.now()),m())}))}i("#menu")&&(i(".menu__primary .menu__list > .menu-item > a").hover((function(){Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)>640&&(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active"),i(this).parent().addClass("menu-item--active"),i(this).parent().removeClass("menu-item--not-active"))})),Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)<640&&i(".menu__primary .menu__list > .menu-item > a").click((function(){i(this).parent().hasClass("menu-item--active")?(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active")):(i(".menu__primary .menu__list > .menu-item > a").parent().addClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active"),i(this).parent().toggleClass("menu-item--active"),i(this).parent().removeClass("menu-item--not-active"))})),i(".menu__primary .menu__list").hover((function(){Math.max(document.documentElement.clientWidth||0,window.innerWidth||0)>640&&(i(".menu__primary .menu__list").toggleClass("menu--hovered"),i(".menu__primary .menu__list").hasClass("menu--hovered")||(i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active")))})));if(document.getElementById("burger").addEventListener("click",(function(){i("#menu").toggleClass("menu--active"),i("body").toggleClass("menu-is-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--not-active"),i(".menu__primary .menu__list > .menu-item > a").parent().removeClass("menu-item--active")})),i(".single")&&i(".video-header")){var w=i(".inherited-shortcode-video");w.is(":visible")&&(i("source",w).each((function(){var e=i(this);e.attr("src",e.data("src"))})),w[0].load())}if(i(".single")&&i(".video-header")){var g=i("#player");g.is(":visible")&&(i("iframe",g).each((function(){var e=i(this);e.attr("src",e.data("src"))})),g[0].load())}if(i(".single")&&i(".content"))for(var f=document.getElementsByClassName("content")[0].getElementsByTagName("iframe"),h=0;h<f.length;h++){var p=f[h].getAttribute("src");if("https://www.youtube"==(p=p.substring(0,19))||"https://www.dailymo"==p){var y=document.createElement("div");f[h].parentNode.insertBefore(y,f[h]),y.appendChild(f[h]),f[h].parentNode.classList.add("video-container"),f[h].classList.add("video")}}}))},255:function(){},88:function(){},609:function(e){"use strict";e.exports=window.jQuery}},function(e){"use strict";var t=function(t){return e(e.s=t)};e.O(0,[692,126,941],(function(){return t(839),t(255),t(88)}));e.O()}]);
//# sourceMappingURL=app.js.map