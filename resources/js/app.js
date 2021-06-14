require('./bootstrap');




$(document).ready(function(){

  $('#home-heading').animate({top: '30vh'}, 1000);
  
  $('.main-offer > div').fadeIn(800);

  setTimeout(() => {
    $('#home-heading > p').fadeIn(1000);
  }, 1000);
 

  $('#nav-menu').click(function(){
    
    $('#mySidenav').width("25rem");
  });
  
  $('#menu-remove').click(function(){

    $('#mySidenav').width("0px");
  });

  $(window).scroll(function(){
  
    let scroll = $(window).scrollTop();
   
    if(scroll > 200){
      $(".car-section > div").fadeIn(1500);
    }
    if(scroll > 500){
      $(".form-div").animate({opacity:1, height:"30vh"}, 1200);
    }
});

  $('.err-close').click(function (){
    
    $(this).parent().remove();
  
  });


});