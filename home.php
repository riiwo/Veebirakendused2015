<?php include 'header.php';?>
<div class="container">
    <div class="leftnav">
        <ul>
            <li><a href="/home.php?id=profile2">KODU</a></li>
            <li><a href="/home.php?id=edit">REDIGEERI</a></li>
            <li><a href="#">STATISTIKA</a></li>
            <li><a href="#">MIDAGI VEEL</a></li>
            <li><a href="#">MIDAGI VEEL</a></li>
            <li><a href="#">MIDAGI VEEL</a></li>
        </ul>
    </div>
    <div class="main">
         <?php $string = $_GET['id'] . ".php"; ?>
         <?php include $string;?>
    </div>
</div>
<?php include 'footer.php';?>