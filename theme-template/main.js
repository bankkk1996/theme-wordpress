$('.main-menu li').click(function(){
    $('.sub-menu', this).toggleClass('display');
    
});

$('.fa-bars').click(function(){
    $('.menu-bar').toggle();
})