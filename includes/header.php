<?php
include 'includes/head.php';
include './core/init.php';    
?>
<body>
  <div id="page">
<div class="header">
    <div class="menu-wrapper">
      <a href="index.php"><img src="./images/logo2.png" alt="home" /></a>
        <ul class="main-menu">
        <?php if(logged_in()){
            echo '<li><a href="home.php">Kodu</a></li>';
            echo '<li><a href="logout.php">Logi välja</a></li>';
        } else {
            echo '<li><a href="Eesti_kaart.php">Statistika</a></li>';
            echo '<li><a href="faq.php">KKK</a></li>';
            echo '<li><a href="login.php">Logi sisse</a></li>';
        }
        ?>
        </ul>
      </div>
    </div>
