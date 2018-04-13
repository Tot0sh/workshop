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

						<?php if(isset($listeIntervenant)): ?>
							<ul class="list-group list-group-flush">
								<?php foreach ($listeIntervenant as $key => $value): ?>
									<li class="list-group-item"><?= $value->lastname." ".$value->firstname." (".$value->speciality.")"; ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>

						<a class="btn btn-secondary" href="index.php?page=home" role="button">Annuler</a>
					<?php else: ?>
						<?php if(!empty($projects)): ?>

						<table id="table-project" class="table table-hover mb-0">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Titre</th>
									<th scope="col">Nombre jeton</th>
									<th scope="col">Nombre place max</th>
									<th scope="col">Nombre intervenants</th>
									<th scope="col">École</th>
									<th scope="col">Année</th>
									<th scope="col">Groupe</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($projects as $key => $value): ?>
									<tr href="index.php?page=home&project=<?= $value->id; ?>">
										<th scope="row"><?= $value->id; ?></th>
										<td><?= $value->title; ?></td>
										<td><?= $value->nbToken; ?></td>
										<td><?= $value->maxNbPerson; ?></td>
										<td>0</td>
										<td>
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
										<td><?= $value->annee; ?></td>
										<td><?= $value->groupe; ?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						
						<?php else: ?>
							<div class="card-body">
								<div class="text-center">
									<i class="far fa-list-alt fa-5x text-black-50"></i>
									<h4 class="mt-3">Aucun projet acutellement</h4>
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

<script type="text/javascript">
	
$(document).ready(function() {

    $('#table-project tr').click(function() {
        var href = $(this).attr("href");
        if(href) {
            window.location = href;
        }
    });

});

</script>