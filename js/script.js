var timestamp = null;
setInterval(function() {
    $.get('./core/getData.php', function(data) {
        $("#content").html(data);
    });
}, 5000);

function showContent(str, str2) {
    if (str=="" || str2=="")
      {
      document.getElementById("kandidate").innerHTML="";
      return;
      }
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("kandidate").innerHTML=xmlhttp.responseText;
        }
      }
    window.history.pushState({},'test',"election.php?e="+str+"&p="+str2,true);
    xmlhttp.open("GET","candidate.php?e="+str+"&p="+str2,true);
    xmlhttp.send();
}
function haaleta(a,b,c) {
    if (a=="" || b=="" || c=="")
      {
      document.getElementById("vote").innerHTML="";
      return;
      }
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("vote").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","core/vote.php?a="+a+"&b="+b+"&c="+c,true);
    xmlhttp.send();
}
function esita(a,b,c,d) {
    if (a=="" || b=="" || c=="" || d=="")
      {
      document.getElementById("esita").innerHTML="";
      return;
      }
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("esita").innerHTML=xmlhttp.responseText;
        }
      }
    xmlhttp.open("GET","core/setcan.php?a="+a+"&b="+b+"&c="+c+"&d="+d,true);
    xmlhttp.send();
}