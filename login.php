<?php
include 'includes/header.php';
include 'core/init.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page= "" ;
}
?>

<div class="container">
   <div id="login">
    <h2>Login Form</h2>
    <?php if($page!=""): ?>
    <form action="core/login.php?page=<?php echo $page;?>" method="post">
    <?php else :?>
    <form action="core/login.php" method="post">
    <?php endif; ?>
        <p><label>E-mail :</label>
        <input id="email" name="email" type="text"/>
        <label>Password :</label>
        <input id="password" name="password" type="password"/>
        <input name="submit" type="submit" value="Login "/></p>
    </form>
    <a href='http://valimised.azurewebsites.net/logifb.php'>
        <br></br>
        <img src='images/fblogin.png'/></a>
</div>
</div>

<?php include 'includes/footer.php';?>
