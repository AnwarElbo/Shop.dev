<div class="container-fluid">
    <section class="container">
		<div class="container-page">
		<h3 class="dark-grey">Registratie</h3>
			<form method="POST">		
                <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && validation_errors() != ""): ?>
                    <div class="alert alert-danger">
                        <?php echo validation_errors(); ?>
                    </div>
                <?php endif; ?>	
				<div class="col-md-6">
					
					<div class="form-group col-lg-12">
						<label>Emailadres</label>
						<input type="Email" name="emailadres" class="form-control" value="<?php echo set_value('emailadres', ''); ?>">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Wachtwoord</label>
						<input type="password" name="password" class="form-control" value="<?php echo set_value('password', ''); ?>">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Herhaal wachtwoord</label>
						<input type="password" name="password-conf" class="form-control" id="" value="">
					</div>
									
					<div class="form-group col-lg-6">
						<label>Voornaam</label>
						<input type="text" name="name" class="form-control" id="" value="<?php echo set_value('name', ''); ?>">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Achternaam</label>
						<input type="text" name="last-name" class="form-control" id="" value="<?php echo set_value('last-name', ''); ?>">
					</div>			
				
				</div>
			
				<div class="col-md-6">
						
					<div class="form-group col-lg-6">
						<label>Telefoonnummer</label>
						<input type="tel" name="phonenumber" onkeydown="return isNumberKey(event);" class="form-control" value="<?php echo set_value('phonenumber', ''); ?>">
					</div>
					<div class="form-group col-lg-6">
						<label>Straat</label>
						<input type="text" name="street" class="form-control" id="" value="<?php echo set_value('street', ''); ?>">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Huisnummer</label>
						<input type="text" name="housenumber" onkeydown="return isNumberKey(event);" class="form-control" id="" value="<?php echo set_value('housenumber', ''); ?>">
					</div>
					
					<div class="form-group col-lg-6">
						<label>Stad</label>
						<input type="text" name="city" class="form-control" value="<?php echo set_value('city', ''); ?>">
					</div>		
					<div class="form-group col-lg-6">
						<label>Postcode</label>
						<input type="text" name="zipcode" class="form-control" value="<?php echo set_value('zipcode', ''); ?>">
					</div>		
					
					<div class="col-sm-6">
						<input type="checkbox" name="terms" class="checkbox" />Ik ga akkoord met de Algemene voorwaarden en heb het gelezen
					</div>			
					<div class="col-lg-12">
						<button type="submit" class="btn btn-primary">Registreren</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>