<html>
<head>
    <link rel="stylesheet" href="css/login.css">
<script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"</script>
<script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"</script>
<!-- <script>src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"</script> -->
<script src="js/jquery.min.js"></script>
<script>src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"</script>


</head>
<body>
    
<div class ="row">
	<div class="col-md-6 mx-auto p-0">
		<div class="card">
<div class="login-box">
	<div class="login-snip">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-space">
			<div class="login">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  placeholder="Enter your username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Enter your password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot">
					<a href="#">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-form">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" placeholder="Create your Username">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Create your password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password" placeholder="Repeat your password" >
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>
				
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" placeholder="Enter your email address">
				</div>





				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot">
					<label for="tab-1">Already Member?</label>
				</div>
			</div>
		</div>
	</div>
</div>   
</div>
</div>
</div>

</body>
<script>
	jQuery(function(){
        const params = new URLSearchParams(window.location.search)
        const action = params.get('action');
        if(action == 'signup')
	    jQuery('input[class="sign-up"]').trigger('click');
})
</script>
</html>

