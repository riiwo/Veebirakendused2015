<?php include'core/init.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>E-valimised</title>
<meta http-equiv="description" content="page description" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">@import "css/styles.css";</style>
<script src="js/jquery-1.9.1.min.js"></script>
</head>

<body>
<div id="page">
<div class="header">
    <div class="menu-wrapper">
      <a href="index.php"><img src="./images/logo2.png"></a>
        <ul class="main-menu">
        <?php if(isset($_SESSION['user_id'])){
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
