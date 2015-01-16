// dit is de footnote code!!
// $(function(){

//   $('.toggle-footnote').on('click', function(e){
    
//     var cutepigs = $('.footnote[data-id=' + $(e.target).text() + ']'); 

//     if(cutepigs).is(':visible').addClass('')

//     e.preventDefault();
//     $('.footnote').hide(){
//     };

//     cutepigs.toggle();
//     cutepigs.css('top', e.pageY);
    
//   })

// });

$(function(){
  
  //op de klik van toggle-footnote: doe iets
  $('.toggle-footnote').on('click', function(e){

    var footnote = cutepigs = $('.footnote[data-id=' + $(e.target).text() + ']'); 

    //sowieso niet de href volgen!
    e.preventDefault();

    $('.footnote').each(function(){

      //als deze aan is, zet deze dan niet uit
      if( footnote.data('id') != $(this).data('id') ){
        $(this).hide();
      }

    });

    // bepaal positie van de div. die vervolgens laat zien.
    cutepigs.css('top', e.pageY);
    cutepigs.toggle();

  });
  
});

//dit is op de plek zet code!!
// $(function(){

//   $('.toggle-footnote').each(function(){

//     console.log($(this).offset());

//     $('.footnote[data-id=' + $(this).text() + ']').css('top', $(this).offset().top - $(window).scrollTop() );

//   });

// });



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