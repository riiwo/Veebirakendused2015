
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>E-valimised</title>
<meta http-equiv="description" content="page description" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<style type="text/css">@import "css/styles.css";</style>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    var valimisringkond = {};
    valimisringkond['Tallinn'] = {
      center: new google.maps.LatLng(59.436986, 24.752144),
      Kandidaate: 3 //võtaks SQL-ist
    };
    valimisringkond['Tartu'] = {
      center: new google.maps.LatLng(58.373768, 26.724465),
      Kandidaate: 1
    };

    valimisringkond['Hiiu, Lääne, Saare'] = {
      center: new google.maps.LatLng(58.793582, 23.407485),
      Kandidaate: 3
    };

    var cityCircle;

    function initialize() {

      var mapOptions = {
        zoom: 7,
        center: new google.maps.LatLng(58.896407, 25.236417),
        mapTypeId: google.maps.MapTypeId.TERRAIN
      };

      var map = new google.maps.Map(document.getElementById('map-canvas'),
          mapOptions);

      for (var city in valimisringkond) {
        var populationOptions = {
          strokeColor: '47c9af',
          strokeWeight: 0.2,
          fillColor: '#47c9af',
          fillOpacity: 0.40,
          map: map,
          center: valimisringkond[city].center,
          radius: 50000 
          //saab määratleda suurust kas kandidaatide arvu järgi või antud valimispiirkonna populatsiooni järgi, link selle piirkonna kandidaatideni
        };

        cityCircle = new google.maps.Circle(populationOptions);
      }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

        </script>
</head>

<body>
<div id="page">
<div class="header">
    <div class="top-wrapper">
        <div class="header-logo">
            <img src="./images/header-logo.png" alt="Valimised">
        </div>
        <div class="logging">
           <div class="login">
               <a href="./login.php"><div class="custombtn1">LOGI SISSE</div></a>
           </div>
           <div class="register">
               <a href='./registrate.php'><div class="custombtn1">REGISTREERU</div></a>
           </div>
        </div>
    </div>
    <div class="menu-wrapper">
        <div class="menu">
            <div class="menu-link"><a href='./index.php'>INDEX</a></div>
            <div class="menu-link"><a href='./faq.php'>KKK</a></div>
            <div class="menu-link"><a href='./kaart.php'>Statistika</a></div>
            <div class="menu-link"><a href='./home.php'>KODU</a></div>
        </div>
    </div>
</div>