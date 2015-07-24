<form class="form-signin" method="POST" action="/<?php echo $this->uri->uri_string(); ?>">
	<?php echo modules::run('message/get_errors'); ?>
	<h2 class="form-signin-heading">Login</h2>
	<div class="form-group">
		<label for="inputUsername" class="sr-only">Email</label>
		<input id="inputUsername" class="form-control" name="customerEmail" placeholder="Email" required="" autofocus="" type="email">
	</div>
	<div class="form-group">	
		<label for="inputPassword" class="sr-only">Wachtwoord</label>
		<input id="inputPassword" name="customerPassword" class="form-control" placeholder="Wachtwoord" required="" type="password">
	</div>
	<div class="form-group">
		<input class="btn btn-md btn-primary" value="Login" type="submit">
		<a class="btn btn-md btn-primary" href="/customer/register">Registreren</a>
	</div>
</form>