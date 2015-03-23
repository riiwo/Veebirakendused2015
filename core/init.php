<?php
session_start();
try {
    require 'functions/functions.php';
} catch (Exception $e) {
    echo "init ei saa echot kätte";
    // Or handle $e some other way instead of `exit`-ing, if you wish.
}
?>