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
            echo '<li><a id="modal_trigger" href="#modal">Sisene</a></li>';
        }
        ?>
        </ul>

        <div id="modal" class="popupContainer" style="display:none;">
        <header class="popupHeader">
            <span class="header_title">Sisene</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </header>
        
        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fa fa-facebook"></i></span>
                        <span class="icon_title">Sisene Facebook-iga</span>
                        
                    </a>
                </div>
                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Sisene</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Registreeri</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                
                <form action="" method="post" id="form_login" autocomplete="off">
                <label>E-mail :</label>
                <input id="email_login" name="email" type="text"/>
                <label>Password :</label>
                <input id="password_login" name="password" type="password"/>
                <span class="check-login-feedback"></span>
                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn">Tagasi</a></div>
                       <div class="one_half last"><input name="submit" id="login" type="submit" value="Login"/></div>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form action="" method="post" id="form_register" autocomplete="off">
                    <label>E-mail:</label>
                    <input type="text" id="email_reg" name="email">
                    <br />
                    <label>Parool:</label>
                    <input type="password" id="password_reg" name="password">
                    <br />
                    <label>Parool uuesti:</label>
                    <input type="password" id="password_check_reg" name="password_check">
                    <br />
                    <label>Eesnimi:</label>
                    <input type="text" id="firstname_reg" name="firstname">
                    <br />
                    <label>Perenimi:</label>
                    <input type="text" id="lastname_reg" name="lastname">
                    </form>
                    <span class="check-register-feedback" data-type="password"></span>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn">Tagasi</a></div>
                        <div class="one_half last"><input name="submit" id="register_user" type="submit" value="Registreeru" </div>
                    </div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript" src="js/modal.js"> </script>
      </div>
    </div>
