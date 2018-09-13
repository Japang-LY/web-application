
<form class="form-signin">
	<div class="text-center mb-4">
		<img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Create a New Account</h1>
	</div>
	<div class="form-label-group">
		<input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
		<label for="inputUsername">Username</label>
	</div>
	
	<div class="form-label-group">
		<input type="email" id="inputEmail" class="form-control" placeholder="Email" required>
		<label for="inputEmail">Email</label>
	</div>
	<div class="form-label-group">
		<input type="date" id="inputBirthday" class="form-control" placeholder="Birthday" required>
		<label for="inputBirthday">Birthday</label>
	</div>
	<div class="form-label-group">
		<select class="form-control" required>
			<option selected="true" disabled>Select Your Gender</option>
			<option value="female">Female</option>
			<option value="male">Male</option>
			<option value="others">Others</option>
		</select>
	</div>
	<div class="form-label-group">
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		<label for="inputPassword">Password</label>
	</div>
	<div class="form-label-group">
		<input type="password" id="inputConfirmPassword" class="form-control" placeholder="Confirm Password" required>
		<label for="inputConfirmPassword">Confirm Password</label>
	</div>
	<div class="checkbox mb-3">
		<label>
			<input type="checkbox" value="remember-me"> I Accept the Terms &amp; Conditions
		</label>
	</div>
	<button class="btn btn-lg btn-secondary btn-block" type="submit">Create Account</button>
</form>