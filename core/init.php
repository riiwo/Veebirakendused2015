<?php
session_start();
try {
    require 'functions/functions.php';
} catch (Exception $e) {
    exit('Require failed! Error: '.$e);
    // Or handle $e some other way instead of `exit`-ing, if you wish.
}
?>