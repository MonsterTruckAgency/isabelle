$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
    itemWidth: 210,

  });
});


jQuery(document).ready(function() {
    jQuery('.post').addClass("hidden").viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.postleft').addClass("hidden").viewportChecker({
        classToAdd: 'animated slideInLeft',
        offset: 100
       });
});

jQuery(document).ready(function() {
    jQuery('.postright').addClass("hidden").viewportChecker({
        classToAdd: 'animated slideInRight',
        offset: 100
       });
});


$(document).ready(function(){
    $('.handle').on('click',function(){
        $('.mobilenav ul').toggleClass('show');
    });
    
});