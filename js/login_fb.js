function getUserData() {
    var feedback = $('div#response');
    FB.api('/me?fields=first_name,email', function(response) {
        var jdata = JSON.stringify(response);
        $.ajax({
            type: "POST",
            url: "/core/log_fb.php",
            data: {
                data: jdata
            },
            success: function(data){
                    feedback.text(data);
                    window.location.href="index.php";
                
            }
        });
    })
}
 
window.fbAsyncInit = function() {
    //SDK loaded, initialize it
    FB.init({
        appId      : '839814442769413',
        xfbml      : true,
        version    : 'v2.2'
    });
 
    //check user session and refresh it
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            //user is authorize
            getUserData();
        } else {
            //user is not authorized
        }
    });
};
 
//load the JavaScript SDK
(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 
//add event listener to login button
document.getElementById('loginBtn').addEventListener('click', function() {
    //do the login
    FB.login(function(response) {
        if (response.authResponse) {
            //user just authorized your app
            document.getElementById('loginBtn').style.display = 'none';
            getUserData();
        }
    }, {scope: 'email,public_profile', return_scopes: true});
}, false);