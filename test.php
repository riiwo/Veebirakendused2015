<?php
include_once 'includes/DB/dbConnect.php';
include_once 'functions.php';
include 'header.php';

session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>


<div class="container">
   <div id="login">
    <h2>Login Form</h2>
    <form action="process_login.php" method="post">
        <label>E-mail :</label>
        <input id="email" name="email" type="text">
        <label>Password :</label>
        <input id="password" name="password" type="password">
        <input name="submit" type="submit" value="Login ">
        
        <span><?php echo $error; ?></span>
    </form>
    <a href='http://valimised.azurewebsites.net/logifb.php' style='text-decoration:none'>
        <br><br>
        <img src='images/fblogin.png' style='border:0;'></a>
</div>
</div>
<?php include 'footer.php';?>