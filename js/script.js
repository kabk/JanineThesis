// dit is de footnote code!!
$(function(){

  $('.toggle-footnote').on('click', function(e){
    e.preventDefault();
    $('.footnote[data-id=' + $(e.target).text() + ']').toggle();
  })

});



//voor de navigatie 
$(function(){

  $('#menu-lijst a').on('click', function(e){

    //Volg de href niet.
    e.preventDefault();

    var item = $(e.target).attr('href');

    $('body').scrollTo( $(item), 1200, {
      offset: - 25
    });

  });

});


// parallax op img?
// $(window).scroll(function(e){
//   parallax();
// });
// function parallax(){
//   var scrolled = $(window).scrollTop();
//   $('.image').css('top',-(scrolled*0.2)+'px');
// }