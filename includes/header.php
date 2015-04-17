<?php
if (basename($_SERVER['PHP_SELF'])=='index.php') {
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
                
               <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page= "" ;
                }
                ?>
                <?php if($page!=""): ?>
                <form action="core/login.php?page=<?php echo $page;?>" method="post">
                <?php else :?>
                <form action="core/login.php" method="post">
                <?php endif; ?>
                <label>E-mail :</label>
                <input id="email" name="email" type="text"/>
                <label>Password :</label>
                <input id="password" name="password" type="password"/>
                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn">Tagasi</a></div>
                       <div class="one_half last"><input name="submit" type="submit" value="Login "/></div>
                    </div>
                </form>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form>
                    <label>E-mail:</label>
                    <input type="text" id="email" name="email">
                    <br />
                    <label>Parool:</label>
                    <input type="password" id="password" name="password">
                    <br />
                    <label>Parool uuesti:</label>
                    <input type="password" id="password_check" name="password_check">
                    <br />
                    <label>Eesnimi:</label>
                    <input type="text" id="firstname" name="firstname">
                    <br />
                    <label>Perenimi:</label>
                    <input type="text" id="lastname" name="lastname">
                    </form>
                    <div id="results"></div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn">Tagasi</a></div>
                        <div class="one_half last"><button id="register_user" class="btn btn_red">Registreeri</button></div>
                    </div>
            </div>
        </section>
    </div>
</div>
        <script type="text/javascript">
    $("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

    $(function(){
        // Calling Login Form
        $("#login_form").click(function(){
            $(".social_login").hide();
            $(".user_login").show();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function(){
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Register');
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function(){
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Login');
            return false;
        });

    })
</script>
      </div>
    </div>
