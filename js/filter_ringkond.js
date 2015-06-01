function filter_ringkond(str){
	if(str==""){
		document.getElementById("filter_result").innerHTML = "";
		return;
	} else {
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("filter_result").innerHTML = xmlhttp.responseText;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD
        xmlhttp.open("GET","./filter_ringkond.php?q="+str,true);
        xmlhttp.send();
=======
        xmlhttp.open("GET","filter_ringkond.php?q="+str,true);
>>>>>>> parent of 21fa06e... test
=======
        xmlhttp.open("GET","filter_ringkond.php?q="+str,true);
>>>>>>> parent of 21fa06e... test
	}
}