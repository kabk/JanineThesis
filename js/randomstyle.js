//dit de random-style code! zodat elke h1, h2, h3, blockquote en p random is! JOE-PIE

$(function(){

  //Haal alle items op die randomized moeten worden.
  var items =
    $('#random-style').find('.item > p, .item > h1, .item > h2, .item > h3, .item > blockquote');

  //Doorloop alle items.
  items.each(function(key, item){

    var item = $(item);

    //Per item: stel de volgende styles in.
    if( item.is('p') ){
      var afwijking = Math.floor((Math.random()*10)+1);
      if(afwijking % 2 == 0){//als het een even getal is:
        item.css('left', "-"+afwijking+"%");
      }else{
        item.css('left', afwijking+"%");
      }
      item.css('width', Math.floor((Math.random()*60)+30)+"%");
      item.css('font-size', Math.floor((Math.random()*7)+10)+"pt");
      item.css('-webkit-animation', "whisper "+Math.floor((Math.random()*8)+3)+"s ease-in-out infinite");
      item.css('-moz-animation', "whisper "+Math.floor((Math.random()*8)+3)+"s ease-in-out infinite");
    }

    //h1
    else if( item.is('h1') ){
      item.css('-webkit-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
      item.css('-moz-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
    }
    
    //h2
    else if( item.is('h2') ){
      var afwijking = Math.floor((Math.random()*10)+1);
      if(afwijking % 2 == 0){//als het een even getal is:
        item.css('left', "-"+afwijking+"%");
      }else{        
        item.css('left', afwijking+"%");
      }
      item.css('width', Math.floor((Math.random()*60)+30)+"%");
      item.css('font-size', Math.floor((Math.random()*20)+50)+"pt");
      item.css('-webkit-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
      item.css('-moz-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
    }
    
    //h3
    else if( item.is('h3') ){
      var afwijking = Math.floor((Math.random()*10)+1);
      if(afwijking % 2 == 0){//als het een even getal is:
        item.css('left', "-"+afwijking+"%");
      }else{        
        item.css('left', afwijking+"%");
      }
      item.css('font-size', Math.floor((Math.random()*20)+20)+"pt");
      item.css('-webkit-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
      item.css('-moz-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
    }
    
    //quote
    else if( item.is('blockquote') ){
      var afwijking = Math.floor((Math.random()*20)+1);
      if(afwijking % 2 == 0){//als het een even getal is:
        item.css('left', "-"+afwijking+"%");
      }else{        
        item.css('left', afwijking+"%");
      }
      item.css('font-size', Math.floor((Math.random()*15)+20)+"pt");
      item.css('-webkit-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
      item.css('-moz-animation', "whisper "+Math.floor((Math.random()*6)+1)+"s ease-in-out infinite");
    }
  });

})

