$(function(){
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp(200);
    });
});

$(document).ready(function(){
    $("#top_2 li").click(function(){
        $("#log").fadeToggle()

    });
  });