$(function(){
	$('input#login').on('click', function(e){
		e.preventDefault();
		var email = $('input#email_login').val();
		var password = $('input#password_login').val();
		var feedback = $('span.check-login-feedback');
		var data_form = $('form#form_login').serializeArray();
		if(!email || !password){
			$('#email').focus();
			feedback.text("Emaili või parooli väli on tühi");
		} else {
			$.post("./core/login.php", data_form, function(data){
				if (data == '0'){
					feedback.text("Sisestatud email ei ole korrektne");
				} else if (data == '1') {
					feedback.text("Sisestatud emailiga kaustajat pole olemas");
				} else if (data == '2'){
					feedback.text("Sisestatud parool voi email ei ole oige");
				} else if (data == '3'){
					feedback.text("Oled edukalt sisse logitud");
                    alert($("#help").val());
                    if($("#help").val()!="index.php") {
					    setTimeout(function(){window.location.href=$("#help").val()} , 2000);   
                    } else {
                        setTimeout(function(){window.location.reload()} , 2000);  
                    }
				}
			});
		} 
	});
});

