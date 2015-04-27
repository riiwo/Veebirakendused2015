$(function(){
	$('input#login').on('click', function(e){
		e.preventDefault();
		var email = $('input#email').val();
		var password = $('input#password').val();
		var feedback = $('span.check-login-feedback');
		var data_form = $('form#form_login').serializeArray();
		if(!email || !password){
			$('#email').focus();
			feedback.text("Emaili või parooli väli on tühi");


		} else {
			$.post("http://valimised.azurewebsites.net/core/login.php", $('form#form_login').serializeArray(), function(data){
				if (data == '0'){
					feedback.text("Sisestatud email ei ole korrektne");
				} else if (data == '1') {
					feedback.text("Sisestatud emailiga kaustajat pole olemas");
				} else if (data == '2'){
					feedback.text("Sisestatud parool voi email ei ole oige");
				} else if (data == '3'){
					window.location.href = "index.php";
				}
			});
		} 
	});
});

