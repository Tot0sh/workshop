<section id="section-login">

	<div class="row justify-content-center">
		<div class="col- col-sm-10 col-md-8 col-lg-6 col-xl-4">
			<div class="card">
				<div class="row justify-content-center mt-3">
					<i class="fas fa-user-circle fa-10x"></i>
				</div>
				<div class="card-body">
					<form action="?page=login" method="post" autocomplete="off">
						<div class="input-group mb-3">
							<input type="email" id="groupName" name="email" value="<?php if(isset($email)) echo $email; ?>" class="form-control" placeholder="Email" aria-describedby="basic-addon"/>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon"><i class="fas fa-at"></i></span>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2"/>
							<div class="input-group-append">
								<span class="input-group-text" id="basic-addon2"><i class="fas fa-key"></i></span>
							</div>
						</div>
						<button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Login</i></button>
					</form>

					<?php if(isset($error) && $error): ?>
						<div class="alert alert-danger m-0 mt-3" role="alert">
					  		<strong>Erreur :</strong> Compte inconnu
						</div>
					<?php endif; ?>

				</div>	
			</div>
		</div>
	</div>

</section>