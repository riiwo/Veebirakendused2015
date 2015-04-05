<?php
include 'includes/header.php';
include 'core/init.php';
$page = intval($_GET['page']);
?>

<div class="container">
   <div id="login">
    <h2>Login Form</h2>
    <form action="core/login.php?page=<?php echo $page;?>" method="post">
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
</div>
<?php include 'includes/footer.php';?>
