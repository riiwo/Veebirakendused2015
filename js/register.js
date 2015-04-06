$(document).ready(function(){
    $("button#register_user").click(function(){
        var email = $("input#email").val();
        var password = $("input#password").val();
        var password_check = $("input#password_check").val();
        var firstname = $("input#email").val();
        var lastname = $("input#email").val();
        $('div#results').text("");
        if($.trim(email)!==''){
            $.post('./core/register.php',{email: email}, function(data){
                if(data !==''){
                $('div#results').text(data);
                } else {
                    $.post('./core/register.php',{password: password, password_check:password_check},function(data){
                    if(data !==''){
                        $('div#results').text(data);
                        } else {
                        $.post('./core/register.php',{email: email, password: password, password_check:password_check, firstname: firstname, lastname: lastname});
                        window.location.href = "http://valimised.azurewebsites.net/";
                    }
                });
                }
            });
        }
    });
});