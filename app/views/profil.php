<section id="section-profil">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-user mr-1"></i> Profil</div>
				<div class="card-body">
					<div class="list-group">
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Nom</h5>
							</div>
							<p class="mb-1"><?= $profil['lastname']; ?></p>
						</span>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Prénom</h5>
							</div>
							<p class="mb-1"><?= $profil['firstname']; ?></p>
						</span>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Email</h5>
							</div>
							<p class="mb-1"><?= $profil['email']; ?></p>
						</span>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Type</h5>
							</div>
							<p class="mb-1">
									<?php switch ($profil['type']) {
										case 1:
											echo 'Responsable pédagogique';
											break;
										case 2:
											echo 'Intervenant';
											break;
										case 3:
											echo 'Apprenant';
											break;
										default:
											echo '???';
											break;
									} ?>
								</p>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>