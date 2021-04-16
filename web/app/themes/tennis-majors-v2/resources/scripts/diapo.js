/**
 * post gallery 
 * @author  hicham ajarif
 */
 var $=jQuery;

 /**
  * [diaporama_gallery description]
  * @return null 
  */
 function diaporama_gallery(){
     var url_page=(window.location).toString();
     var li_visus=$(".block_diapo .list_thumbs ul").children();
     var lists_legend=$("ul.lists_legend").children();
     
     $(".block_diapo .list_thumbs ul li").each(function(i,obj){
         $(obj).unbind();
         $(obj).bind("click",function(){
             // kamino_boost_ctr();
             change_item_diapo(i);
             location.reload();
         });
     });
 
     var $nav_btn_obj = $(".block_diapo .visu_block>.btn-navs");
     $nav_btn_obj.unbind();
     $nav_btn_obj.bind("click",function(){
         var _this=this;
         if($(_this).data('index')==$(_this).data('count')){
             return;
         }else{
             $("#container .widgetLegende").show();
             $(li_visus[$(_this).data('index')]).click();
         }
     });
     $(".block_diapo .list_thumbs .navs>span").unbind();
     $(".block_diapo .list_thumbs .navs>span").bind("click",function(){
         if($(this).data('index')<=$(this).data('count')-1 && $(this).data('count')-$(this).data('index')>4){
             var thumbnail_gallery = 104 ;
             var val_pos= -($(this).data('index')* thumbnail_gallery );
             if($(this).hasClass('_left') && ($(this).parent().find("._left").data('index')>0)){
                 $(this).parent().find("._right").data("index",$(this).data("index"));
                 $(this).data("index",$(this).data("index")-1);
             }else if($(this).hasClass('_right')){
                 
                 $(this).parent().find("._left").data("index",$(this).data("index")-1);
                 $(this).data("index",$(this).data("index")+1);
 
             }
             $(".block_diapo .list_thumbs .list_block").find('ul').animate({left : val_pos},1000);
         }
 
     });
 
     $(document).trigger('diaporama_ready' );
 }
 /**
  * boost CTR on display campaign and traffic acquisition
  * @author hicham ajarif
  * @param  selector
  */
 // function kamino_boost_ctr(selector){
 // 	selector = selector || "#page" ;
 // 	$('html, body').animate({ scrollTop: $(selector).offset().top+30 }, 300);
 // }
 
 /**
  * [catch_item description]
  * @return item's index
  */
 function catch_item() {
     var regEx = /#item=([0-9]+)/i;
     var matches = regEx.exec(window.location.href);
     return (matches && matches[1]) ? matches[1] : 1;
 }
 
 /**
  * [preLoadImages description]
  * @param  _this [description]
  * @return cached image
  */
 function preLoadImages(_this) {
     var cacheImage = document.createElement('img');
     cacheImage.src = jQuery(_this).data("src");
     cacheImage.alt = "";
     return cacheImage;
 }
 /**
  * [gallery_nav_thumbs description]
  * @param  idx [description]
  * @return null
  */
 function gallery_nav_thumbs(idx){
     var count_items = $(".thumb_list li").length;
     var items_width = $(".thumb_list li").outerWidth(); 
     idx = idx-1;
     
     if(idx==0){
         $(".thumb_list").animate({
             left : items_width,
         });
     }else if(count_items-2 <= idx){
         $(".thumb_list").animate({
             left : (items_width * -(count_items-2))+items_width,
         });
     }else{
         if(count_items>0){
             $(".thumb_list").animate({
                 left : (items_width * (-idx))+items_width,
             });
         }
     }
 }
 
 /**
  * [change_item_diapo description]
  * @param  {[type]} i [description]
  * @return null
  */
 function change_item_diapo(i){ 
 
     var url_page=(window.location).toString();
     var li_visus=$(".block_diapo .list_thumbs ul").children();
     var lists_legend=$("ul.lists_legend").children();
     var _this = $(".block_diapo .list_thumbs ul li").get(i) ;
     var li_length = $(".block_diapo .list_thumbs ul li").length;
     $("ul.lists_legend li").removeClass("active");
     $(lists_legend[i]).addClass('active');
     
     $(".block_diapo .list_thumbs ul li").removeClass("active");
     $(_this).addClass("active");
 
     jQuery( preLoadImages( _this ) ).load( function( e ) {
         var $content_figure = preLoadImages( _this );
         var custom_url = jQuery( _this ).data( "custom_url" );
         if ( custom_url != undefined ) {
             var $custom_url = jQuery( '<a href="' + custom_url + '" target="_blank"></a>' );
             $content_figure = $custom_url.html( $content_figure );
         }
         $( ".block_diapo .visu_block figure" ).html( $content_figure );
         if (i==0){
             $(".block_diapo .visu_block>.btn-navs._left, .block_diapo .slide_nb .caption-navs._left").data('index',li_length-1);
             $(".block_diapo .visu_block>.btn-navs._right, .block_diapo .slide_nb .caption-navs._right").data('index',i+1);
         }else if (i==li_length-1){
             $(".block_diapo .visu_block>.btn-navs._left, .block_diapo .slide_nb .caption-navs._left").data('index',i-1);
             $(".block_diapo .visu_block>.btn-navs._right, .block_diapo .slide_nb .caption-navs._right").data('index',0);
         }else{
             $(".block_diapo .visu_block>.btn-navs._left, .block_diapo .slide_nb .caption-navs._left").data('index',i-1);
             $(".block_diapo .visu_block>.btn-navs._right, .block_diapo .slide_nb .caption-navs._right").data('index',i+1);
         }
 
     });
 
     var str_split="#item=";
     var index_page=i+1;
 
     gallery_nav_thumbs(index_page);
 
     url_page_tab=url_page.split(str_split);
 
     var url_page_new=url_page_tab[0]+"#item="+index_page;
     
     if ("pushState" in history) {
         history.pushState(null, "Diaporama Article", url_page_new);
     }
     
     $(document).trigger('change_item', i);
 }
 
 /**
  * [launchDiapo description]
  * @param  {[type]} item [description]
  * @return null
  */
 function launchDiapo(item){
     diaporama_gallery();
     if(item>0){
         var li_visus_load=$(".block_diapo .list_thumbs ul").children();
         item = (item-1)%li_visus_load.length;
         if(item<li_visus_load.length){
             change_item_diapo(item);
         }
 
     }
 }
 
 var the_item = catch_item();
 if(jQuery){
     launchDiapo(the_item);
 }else{
     $(function(){
         launchDiapo(the_item);
     });
 }