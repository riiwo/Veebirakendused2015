$(".modal_trigger").leanModal({top : 20, overlay : 0.6, closeButton: ".modal_close" });
$( ".next" ).click(function() {
    $("#help").val(this.id);
});
    $(function(){
        // Calling Login Form
        $("#login_form").click(function(){
            $(".social_login").hide();
            $(".user_login").show();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function(){
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Registreeru');
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function(){
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Sisene');
            return false;
        });

    })