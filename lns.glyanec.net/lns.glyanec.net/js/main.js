(function($){$(document).ready(function(){var devel=$('#gl_devel').html();$('#gl_devel').append('<noindex><div class="mask_devel">'+devel+'</div></noindex>');$('.node img').each(function(){var floatImg=$(this).css('float');if(floatImg=='left'){$(this).addClass('content_left_img')}else if(floatImg=='right'){$(this).addClass('content_right_img')}else{$(this).addClass('content_center_img')}});$('.good_basket_min').click(function(){var $input=$(this).parent().find('input');var count=parseInt($input.val())-1;count=count<1?1:count;$input.val(count);$input.change();return!1});$('.good_basket_plus').click(function(){var $input=$(this).parent().find('input');$input.val(parseInt($input.val())+1);$input.change();return!1});if($('.countdown_origin').length){$('.countdown_origin').each(function(){var count_to=new Date();count_to=parseInt($(this).data('time'))*1000;$(this).countdown({until:count_to,layout:$('.countdown_layout',$(this).parent()).html()})})}
$('.node_goods .main_images').slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:'.node_goods .thumb_images'});$('.node_goods .thumb_images').slick({slidesToShow:6,slidesToScroll:1,asNavFor:'.node_goods .main_images',focusOnSelect:!0,responsive:[{breakpoint:767,settings:{slidesToShow:2,slidesToScroll:1}}]});$('.main_reviews').slick({slidesToShow:1,slidesToScroll:1,arrows:!1,fade:!0,asNavFor:'.thumb_reviews'});$('.thumb_reviews').slick({slidesToShow:7,slidesToScroll:1,asNavFor:'.main_reviews',focusOnSelect:!0,responsive:[{breakpoint:1200,settings:{slidesToShow:7,slidesToScroll:1,}},{breakpoint:991,settings:{slidesToShow:4,slidesToScroll:1}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}}]});$('.goods_popular .block_content').slick({slidesToShow:4,slidesToScroll:1,focusOnSelect:!0,responsive:[{breakpoint:1200,settings:{slidesToShow:3,slidesToScroll:1,}},{breakpoint:991,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:767,settings:{slidesToShow:1,slidesToScroll:1}}]});$('.main_slider .block_content').slick({slidesToShow:3,infinite:!0,slidesToScroll:1,arrows:!1,dots:!0,responsive:[{breakpoint:1200,settings:{slidesToShow:3,slidesToScroll:1,}},{breakpoint:991,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:767,settings:{slidesToShow:2,slidesToScroll:1}}]});$('.block_faq .title').click(function(){$(this).next().slideToggle();$(this).parents('.col').toggleClass('active')});var snazzy_maps_map_style=[{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}];$('.map_canvas').each(function(){var coordinate=$(this).data('coordinate');var map_wrap_id=$(this).attr('id');var mapCenter=coordinate.split(',');var markerPosition=new google.maps.LatLng(parseFloat(mapCenter[0]),parseFloat(mapCenter[1]));if(snazzy_maps_map_style==''){var my_style=new Array()}else{var my_style=snazzy_maps_map_style}
var mapCenter_=coordinate.split(',');var myOptions={zoom:14,center:new google.maps.LatLng(parseFloat(mapCenter_[0]),parseFloat(mapCenter_[1])),mapTypeId:google.maps.MapTypeId.ROADMAP,styles:my_style,scrollwheel:!1};var map=new google.maps.Map(document.getElementById(map_wrap_id),myOptions);var marker=new google.maps.Marker({position:markerPosition,map:map,icon:'../images/baloon.png',optimized:!1,title:'Blend Tower, Piazza Quattro,<br/> Novembre 7, 20124, Milano, ITALY'});var infoWnd=new google.maps.InfoWindow({content:'Blend Tower, Piazza Quattro, <br/>Novembre 7, 20124, Milano, ITALY',position:markerPosition,});infoWnd.open(map,marker)});$('.order_form .form_textarea label').click(function(){$(this).next().toggleClass('active')});$('.lk_table_user_orders .change_view_click').click(function(){$(this).parents('tr').toggleClass('active_row_t');$(this).parents('tr').next().toggleClass('active_row');return!1});$('.header .block_search .search_btn').click(function(){$(this).next().fadeIn();$('.popup_fon3').fadeIn()});$('.popup_fon3').click(function(){$('.header .block_search form').fadeOut();$('.popup_fon3').fadeOut()});if($(window).width()<767){var e=$(window),t=$("html"),n=$("body"),i=$("body, html");var c=$("#menu").mmenu().data("mmenu"),d=$("#hamburger").on("click",function(e){e.preventDefault(),t.hasClass("mm-opened")?c.close():c.open()}).children(".hamburger");c.bind("close:finish",function(){setTimeout(function(){d.removeClass("is-active")},100)}),c.bind("open:finish",function(){setTimeout(function(){d.addClass("is-active")},100)});$('#gl_devel').insertAfter('.footer .menu_wrapper')}})})(jQuery)