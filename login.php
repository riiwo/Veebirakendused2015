<?php include 'header.php';?>
<div class="container">
    <form action="POST">
        <p>Kasutajanimi:</p>
        <input type="text">
        <p>Parool:</p>
        <input type="password">
        <input type="button" action="post"  class="custombtn1" value="LOGI SISSE">
        <span id="signinButton">
          <span
            class="g-signin"
            data-callback="signinCallback"
            data-clientid="911888577888-otoae6ai5f2k9q7ni01giocn3onujl4o.apps.googleusercontent.com"
            data-cookiepolicy="single_host_origin"
            data-requestvisibleactions="http://schema.org/AddAction"
            data-scope="https://www.googleapis.com/auth/profile">
          </span>
        </span>
       
    </form>  
</div>
<?php include 'footer.php';?>
