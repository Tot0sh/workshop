<section id="section-profil">


	<?php var_dump($_SESSION['profil']); ?>

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-user mr-1"></i> Profil</div>
				<div class="list-group">
					<span class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Nom</h5>
						</div>
						<p class="mb-1"><?= htmlentities($profil->lastname); ?></p>
					</span>
					<span class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Prénom</h5>
						</div>
						<p class="mb-1"><?= htmlentities($profil->firstname); ?></p>
					</span>
					<span class="list-group-item list-group-item-action flex-column align-items-start">
						<div class="d-flex w-100 justify-content-between">
							<h5 class="mb-1">Type</h5>
						</div>
						<p class="mb-1">
								<?php switch (htmlentities($profil->id_Type_User)) {
									case 1:
										echo 'Apprenant';
										break;
									case 2:
										echo 'Intervenant';
										break;
									case 3:
										echo 'Responsable';
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

</section>