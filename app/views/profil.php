<section id="section-profil">

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
							<h5 class="mb-1">Statut</h5>
						</div>
						<p class="mb-1">
							<?php switch (get_class($profil)) {
								case 'Student':
									echo 'Apprenant';
									break;
								case 'Contributor':
									echo 'Intervenant';
									break;
								case 'Manager':
									echo 'Responsable';
									break;
								default:
									echo '???';
									break;
							} ?>
						</p>
					</span>
					<?php if(get_class($profil) == 'Student'): ?>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">École</h5>
							</div>
							<p class="mb-1"><?= htmlentities($profil->school); ?></p>
						</span>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Année</h5>
							</div>
							
							<p class="mb-1">
								<?php
								switch (htmlentities($profil->year)) {
									case 1:
										echo htmlentities($profil->year).'ère ';
										break;
									default:
										echo htmlentities($profil->year).'ème ';
										break;
								}
								?>
								année
							</p>

						</span>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Groupe</h5>
							</div>
							<p class="mb-1">Groupe <?= htmlentities($profil->group); ?></p>
						</span>
					<?php elseif(get_class($profil) == 'Contributor'): ?>
						<span class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
								<h5 class="mb-1">Spécialité</h5>
							</div>
							<p class="mb-1"><?= htmlentities($profil->speciality); ?></p>
						</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

</section>