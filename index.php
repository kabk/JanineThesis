<html lang="en">
  <head>
    <title>Scriptie shizzle Janine</title>
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/scrollto.js"></script>  
    <script src="js/script.js"></script>
    <script src="js/randomstyle.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>
  <body>
    
    <div id="menu">
      <a>menu</a>
      <div id="menu-lijst">
        <nav>
          <ul>
            <li><a href="#p-home">Home</li>
            <li><a href="#p-prologue">YOYO!</li>
            <li><a href="#p-inleiding">Inleiding</li>
            <li><a href="#p-h1">We kijken graag</a></li>
            <li><a href="#p-h2">Klik hier</a></li>
            <li><a href="#p-h3">Toekomst</a></li>
            <li><a href="#p-conclusie">Conclusie</a></li>
            <li><a href="#p-literatuurlijst">Literatuurlijst</a></li>
          </ul>
        </nav>
      </div>
    </div>
      
    <!-- <div class='item' id="p-inleiding"></div> -->
    <div id="thesis">
      <?php include 'texts/text.php'; ?>
    </div>

  </body>
</html>























<!-- 
BARTS FOOTNOTE ID

<a href="#" class="toggle-footnote">1</a>

<div class="footnote" data-id="1">
  Dit is de footnote.
</div>

<script src="jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(function(){

  $('.toggle-footnote').on('click', function(e){
    e.preventDefault();
    $('.footnote[data-id=' + $(e.target).text() + ']').toggle();
  })

});

</script>

<style>
  
.toggle-footnote::before{
  content: "[";
}
.toggle-footnote::after{
  content: "]";
}

.footnote{
  display:none;
}

</style> -->