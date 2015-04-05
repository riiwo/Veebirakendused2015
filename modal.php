<?php include 'includes/header.php'; ?>

<div class="container">
	<a id="modal_trigger" href="#modal" class="btn">Click here to Login or register</a>

	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Sisene</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Registreeru</a></div>
				</div>
			</div>
			<!-- Register Form -->
			<div class="user_register">
				<form action="" id="register" type="post">
				<label>E-mail:</label>
    			<input type="text" id="email" name="email">
				<br />
				<label>Parool:</label>
    			<input type="password" id="password" name="password">
				<br />
				<label>Parool uuesti:</label>
    			<input type="password" id="password_check" name="password_check">
				<br />
				<label>Eesnimi:</label>
    			<input type="text" id="firstname" name="firstname">
				<br />
				<label>Perenimi:</label>
    			<input type="text" id="lastname" name="lastname">
				<br />
				<input value="Registreeru" id="register_user"  type="button">
				</form>

<div id="results"></div>
			</div>
		</section>
	</div>
</div>
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

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
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
</script>
<?php include 'includes/footer.php'; ?>