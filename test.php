<?php include 'includes/header.php';?>

<form action="" id="register" type="post">
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
	<br />
	<input value="Registreeru" id="register_user"  type="button"></div>
	</form>

<div id="results"></div>

<?php include 'includes/footer.php';?>
