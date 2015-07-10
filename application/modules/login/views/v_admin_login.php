<form class="form-signin" method="POST" action="/<?php echo $this->uri->uri_string(); ?>">
	<?php echo modules::run('message/get_errors'); ?>
	<h2 class="form-signin-heading">Login</h2>

	<label for="inputUsername" class="sr-only">Gebruikersnaam</label>
	<input id="inputUsername" class="form-control" name="adminUsername" placeholder="Gebruikersnaam" required="" autofocus="" type="text">
	<label for="inputPassword" class="sr-only">Wachtwoord</label>
	<input id="inputPassword" name="adminPassword" class="form-control" placeholder="Wachtwoord" required="" type="password">
	
	<input class="btn btn-lg btn-primary btn-block" value="Login" type="submit">
</form>