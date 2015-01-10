<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
<p>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<div id="fire-fadeout"></div>

<?php for($i=1; $i<=5; $i++){ ?>
<div class="fire-wrapper">
  <?php for($j=0; $j<=20; $j++){ ?>
  <div class="fire2" style="
    margin-right: <?php echo rand(1,30); ?>px;
    width: <?php echo rand(10,80); ?>px;
    height: <?php echo rand(10,700); ?>px;
    -webkit-animation: whisper 1.<?php echo rand(1,9); ?>s ease-in-out infinite;
    ">
  </div>
  <?php } ?>
</div>
<?php } ?> 

<style>

html, body{
  margin:0;
  width:100%;
  height:100%;
}

p {
  width:600px;
  text-align: justify; 
}

.fire-wrapper{
  width:100%;
  height:1000px;
  max-height:50%;
  position:fixed;
  top:0;
}

  .fire2{
    float:left;
    margin-right:2px;
    width:30px;
    height:100%;
    background-image: linear-gradient(to bottom, #200 0%, transparent 100%);
    -webkit-animation: whisper 4s ease-in-out infinite;
    /*animation: whisper 2s ease-in-out infinite;*/
  }


#fire-fadeout{
  width:100%;
  height:200px;
  max-height:40%;
  position:fixed;
  background-image: linear-gradient(to bottom, #fff 0%, transparent 100%);
  top:0;
}


@-webkit-keyframes whisper {
  0%   {margin-left:0px;}
  50%  {margin-left:5px;}
  100% {margin-left:0px;}
}

</style>