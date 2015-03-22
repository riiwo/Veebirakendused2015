<?php
include('header.php');
?>

<div class="container">
   <div id="register">
    <h2>Login Form</h2>
    <form action="registrate-action.php" method="post" accept-charset="UTF-8">

        <label>Eesnimi :</label>
        <input id="firstname" name="firstname" type="text">

        <label>Perenimi :</label>
        <input id="lastname" name="lastname" type="text">

        <label>E-mail :</label>
        <input id="email" name="email" type="text">

        <label>Password :</label>
        <input id="password" name="password" type="password">

        <input name="submit" type="submit" value="Login ">
        
    </form>
</div>
</div>
