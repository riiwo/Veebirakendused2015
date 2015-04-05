<?php include 'includes/header.php';

if(empty($_POST)===false){
    $required = array('email','password','password_check','firstname','lastname');
    foreach ($_POST as $key => $value) {
        if(empty($value) && in_array($key, $required)===true) {
            $errors[] = 'Koik valjad tuleb taita';
            break 1;
        }        
    }
    if(empty($errors)===true){
        if(user_exists($_POST['email'])===true){
            $errors[]='Sisestatud emailiga \'' . $_POST['email'] . '\' kasutaja on juba olemas.';
        }
        if(strlen($_POST['password']) < 8){
            $errors[]='Sisestatud parool peab olema vähemalt 8 tähemärki';
        }
        if($_POST['password'] !== $_POST['password_check']){
            $errors[]='Sisestatud paroolid ei klapi';
        }
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false){
            $errors[]='Sisestatud email ei ole korrektne';
        }
    }
}
?>

<div class="container">
    <div id="register">
        <h2>Register Form</h2>
<?php

if(isset($_GET['success'])){
    echo "Sa oled edukalt registreeritud!";
} else {
    if(empty($_POST)===false && empty($errors)===true){
    $register_data = array(
        'firstname' => $_POST['firstname'],
        'lastname'  => $_POST['lastname'],
        'email'     => $_POST['email'],
        'password'  => $_POST['password']
        );
    register_user($register_data);
    header('Location: register.php?success');
} else if(empty($errors===false)){
    echo show_errors($errors);
}

?>
        <form action="" method="post">
            <ul>
                <li><label>E-mail:</label>
                <input type="text" name="email"></li>
                <li><label>Parool:</label>
                <input type="password" name="password"></li>
                <li><label>Parool uuesti:</label>
                <input type="password" name="password_check"></li>
                <li><label>Eesnimi:</label>
                <input type="text" name="firstname"></li>
                <li><label>Perenimi:</label>
                <input type="text" name="lastname"></li>
                <li><input value="Registreeru" type="submit"></li>
            </ul>
        </form>
    </div>
</div>

<?php
}
include 'includes/footer.php';?>
