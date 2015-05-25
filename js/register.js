$(function(){
    $("input#register_user").click(function(e){
        e.preventDefault();
        var email = $("input#email_reg").val();
        var password = $("input#password_reg").val();
        var password_check = $("input#password_check_reg").val();
        var firstname = $("input#firstname_reg").val();
        var lastname = $("input#lastname_reg").val();
        var data_form = $('form#form_register').serializeArray();
        var feedback = $('span.check-register-feedback');
        
        if(!email || !password || !password_check || !firstname || !lastname){
            $('#email').focus();
            feedback.text("Kõik väljad tuleb täita");
        } else {
            $.post('./core/register.php', data_form, function(data){
                if (data =='0'){
                    feedback.text("Sisestatud email ei ole korrektne");
                } else if (data =='1'){
                    feedback.text("Sisestatud emailiga kasutaja on olemas");
                } else if (data == '2'){
                    feedback.text("Sisestatud paroolid ei klapi");
                } else if (data == '3'){
                    feedback.text("Kasutaja edukalt registreeritud!");
                    setTimeout(function(){window.location.href="index.php"} , 2000);
                } 
            });
        }
     });
});