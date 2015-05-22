<?php
if (basename($_SERVER['PHP_SELF'])=='Eesti_kaart.php') {
  include 'includes/head_index.php';
} else {
  include 'includes/head.php';
}
include './core/init.php';   
?>
<body>
  <div id="page">
  <div class="row" id="header">
    <div class="row" id="header-inner">
      <div class="medium-6 small-4 column">
       <input type="hidden" id="help" value="index.php">
       <a href="index.php"><img src="./images/logo2.png" alt="home" /></a>
     </div>
     <div class="medium-6 small-8 column">
      <ul class="nav-bar">
        <?php if(logged_in()){
          echo '<li><a href="home.php">Kodu</a></li>';
          echo '<li><a href="logout.php">Logi välja</a></li>';
        } else {
          echo '<li><a href="Eesti_kaart.php">Statistika</a></li>';
          echo '<li><a href="faq.php">KKK</a></li>';
          echo '<li><a class="modal_trigger" href="#modal">Sisene</a></li>';
        }
        ?>
      </ul>
      </div>
    </div>
  </div>
