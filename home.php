<?php include 'includes/header.php';?>
<?php if(logged_in()): ?>
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
    <?php include 'loggedin.php';?>
    </div>
</div>
<?php else: ?>
    <?php header("Location: index.php"); ?>
<?php endif; ?>
<?php include 'includes/footer.php';?>