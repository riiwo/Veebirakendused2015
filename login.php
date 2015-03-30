<?php
include 'header.php';
include 'core/init.php';
?>
<div class="container">
   <div id="login">
    <h2>Login Form</h2>
    <form action="functions/login.php" method="post">
        <label>E-mail :</label>
        <input id="email" name="email" type="text">
        <label>Password :</label>
        <input id="password" name="password" type="password">
        <input name="submit" type="submit" value="Login ">
    </form>
    <a href='http://valimised.azurewebsites.net/logifb.php' style='text-decoration:none'>
        <br><br>
        <img src='images/fblogin.png' style='border:0;'></a>
</div>
<div class="container">
    <div id="registrate">
        <h2>Registrate Form</h2>
        <form action="" method="post">
            <label>Eesnimi</label>
            <input id="firstname" name="firstname" type="text">
            <label>Perenimi</label>
            <input id="lastname" name="lastname" type="text">
            <label>E-mail :</label>
            <input id="email" name="email" type="text">
            <label>Password :</label>
            <input id="password" name="password" type="password">
            <input name="submit" type="submit" value="Registreeru ">
        </form>
    </div>
</div>
<?php include 'footer.php';?>
