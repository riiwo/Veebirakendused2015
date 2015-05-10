window.fbAsyncInit = function() {
    FB.init({
      appId      : '839814442769413', // App ID
      channelUrl : 'http://valimised.azurewebsites.net/', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    FB.Event.subscribe('auth.authResponseChange', function(response) {
        if (response.status === 'connected') {
            check_user();
        } else if (response.status === 'not_authorized') {
            die("Not_authorized");
        } else {
            die("Logged out");
        }
    }, {scope: 'public_profile, email'});
};

function check_user() {
    FB.api('/me?fields=id,first_name,last_name', function(response) {
        var jdata = JSON.stringify(response);

        $.post("./core/log_fb.php", jdata, function(data){
				if (data == '1'){
					setTimeout(function(){window.location.href="index.php"} , 2000);   
				} 
			});
    })
}

(function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
}(document));