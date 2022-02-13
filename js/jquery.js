$(function(){
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown(200);
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp(200);
    });

    $('#slide3>ul>li').hide(); 
    $('#slide3>ul>li:first-child').show();

    setInterval(function(){
        $('#slide3>ul>li:first-child').fadeOut()
        .next().fadeIn().end(1000)
        .appendTo('#slide3>ul');
    },3000);

});

$(document).ready(function(){
    $("#top_2 li").click(function(){
        $("#log").fadeToggle()

    });
  });

$(document).ready(function(){
    var tabBtn = $(".tab-btn > ul > li");
    var tabCont = $(".tab-cont > div");
    
    tabCont.hide().eq(0).show();
    
    tabBtn.click(function(e){
        e.preventDefault();
        var target = $(this);
        var index = target.index();
        tabBtn.removeClass("active");
        target.addClass("active");
        tabCont.css("display","none");
        tabCont.eq(index).css("display","block");
    });
});
