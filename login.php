<?php
include('header.php');
include('sign_in.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
<div class="container">
   <div id="login">
    <h2>Login Form</h2>
    <form action="" method="post">
        <label>E-mail :</label>
        <input id="email" name="email" type="text">
        <label>Password :</label>
        <input id="password" name="password" type="password">
        <input name="submit" type="submit" value="Login ">
        
        <span><?php echo $error; ?></span>
    </form>
</div>
</div>
<?php include 'footer.php';?>
