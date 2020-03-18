$(".hamburger").click(function(){
    $(".wrapper").toggleClass("collapse");
    $("i", this).toggleClass("fas fa-window-close fas fa-search");
});

$(".sub-nav").click(function(){
    $(this).toggleClass('tap');
}); 