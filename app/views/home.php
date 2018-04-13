<section id="section-accueil">
	
	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header">
					<div class="float-left align-bottom mt-1">
						<i class="fas fa-home mr-1"></i> Accueil
					</div>

					<?php if($statut == 'Manager' && !empty($projects)): ?>
						<a class="btn btn-primary float-right btn-sm" href="index.php?page=add_project" role="button">Créer un projet</a>
					<?php endif; ?>

				</div>

				<?php if($statut == 'Manager'): ?>

					<?php if(isset($_GET['project'])): ?>

						<div class="card-body">
							
							<div class="form-row">
								<div class="form-group col-8">
									<label>Titre</label>
									<input type="text" class="form-control" readonly value="<?= $getProject->title; ?>">
								</div>
								<div class="form-group col-2">
									<label>Nombre max</label>
									<input type="text" class="form-control" readonly value="<?= $getProject->maxNbPerson; ?>">
								</div>
								<div class="form-group col-2">
									<label>Quantité jeton</label>
									<input type="text" class="form-control" readonly value="<?= $getProject->nbToken; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-12">
									<label>Description du projet</label>
									<textarea class="form-control" readonly rows="5"><?= $getProject->description; ?></textarea>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col">
									<label>École de la classe</label>
									<input type="text" class="form-control" readonly value="<?php switch ($getProject->classe) {
										case 1:
											echo 'EPSI';
											break;
										case 2:
											echo 'WIS';
											break;
										case 3:
											echo 'OSS';
											break;
									} ?>">
								</div>
								<div class="form-group col">
									<label>Année de la classe</label>
									<input type="text" class="form-control" readonly value="<?php switch ($getProject->annee) {
										case 1:
											echo '1ère année';
											break;
										case 2:
											echo '2éme année';
											break;
										case 3:
											echo '3éme année';
											break;
										case 4:
											echo '4éme année';
											break;
										case 5:
											echo '5éme année';
											break;
									} ?>">
								</div>
								<div class="form-group col">
									<label>Groupe de la classe</label>
									<input type="text" class="form-control" readonly value="Groupe <?= $getProject->groupe; ?>">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-12">
									<label>Liste des intervenants</label>
									<select multiple class="form-control" readonly>
										<?php foreach ($listeIntervenant as $key => $intervenant): ?>
											<option><?= $intervenant->lastname. " " .$intervenant->firstname." (".$intervenant->speciality.")"; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>

							<a class="btn btn-secondary" href="index.php?page=home" role="button">Retour</a>
						</div>
						
					<?php else: ?>
						<?php if(!empty($projects)): ?>

						<table id="table-project" class="table table-striped table-bordered mb-0">
							<thead>
								<tr>
									<th class="text-center" scope="col">#</th>
									<th class="text-center">Titre</th>
									<th class="text-center">Nombre jeton</th>
									<th class="text-center">Nombre place max</th>
									<th class="text-center">École</th>
									<th class="text-center">Année</th>
									<th class="text-center">Groupe</th>
									<th class="text-center" scope="col"></th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($projects as $key => $value): ?>
									<tr>
										<th class="text-center" scope="row"><?= $value->id; ?></th>
										<td><?= $value->title; ?></td>
										<td class="text-center"><?= $value->nbToken; ?></td>
										<td class="text-center"><?= $value->maxNbPerson; ?></td>
										<td class="text-center">
											<?php switch ($value->classe) {
												case 1:
													echo 'EPSI';
													break;
												case 2:
													echo 'WIS';
													break;
												case 3:
													echo 'OSS';
													break;
											} ?>
											</td>
										<td class="text-center"><?php switch ($value->annee) {
										case 1:
											echo '1ère année';
											break;
										case 2:
											echo '2éme année';
											break;
										case 3:
											echo '3éme année';
											break;
										case 4:
											echo '4éme année';
											break;
										case 5:
											echo '5éme année';
											break;
									} ?></td>
										<td class="text-center">Groupe <?= $value->groupe; ?></td>
										<td><a class="btn btn-primary btn-sm btn-block" href="index.php?page=home&project=<?= $value->id; ?>" role="button"><i class="fas fa-eye"></i></a></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						
						<?php else: ?>
							<div class="card-body">
								<div class="text-center">
									<i class="far fa-list-alt fa-5x text-black-50"></i>
									<h4 class="mt-3">Aucun projet actuellement</h4>
									<a class="btn btn-primary mt-3" href="index.php?page=add_project" role="button">Créer un projet</a>
								</div>
							</div>
						<?php endif; ?>
					<?php endif; ?>

				<?php elseif($statut == 'Contributor'): ?>

					<div class="card-body">
						Espace intervenant
					</div>

				<?php elseif($statut == 'Student'): ?>

					<div class="card-body">
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th scope="col">Titre</th>
									<th scope="col">Description</th>
									<th scope="col">Nombre de jetons autorisé</th>
									<th scope="col">Nombre d'étudiant max</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($projects as $oneProject) 
								{ ?>
									<tr>
										<td>
											<?= $oneProject->title; ?>
										</td>
										<td class="">
											<?= $oneProject->description; ?>
										</td>
										<td>
											<?= $oneProject->nbToken; ?>
										</td>
										<td>
											<?= $oneProject->maxNbPerson; ?>
										</td>
										<td>
											<a class="btn btn-primary btn-sm" href="index.php?page=view_project&project=<?= $oneProject->id; ?>" role="button" data-delay='{"show":"1000"}' title="Voir"><i class="fas fa-eye"></i></a>
										</td>
									</tr><?php
								} ?>
							</tbody>
						</table>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

</section>