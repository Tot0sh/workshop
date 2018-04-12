<section id="section-accueil">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header">
					<div class="float-left align-bottom mt-1">
						<i class="fas fa-home mr-1"></i> Accueil
					</div>

					<?php if($statut == 'Manager' && !empty($projects)): ?>
						<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Créer un nouveau projet">
							Créer un projet
						</button>
					<?php endif; ?>

				</div>
				<div class="card-body">

					<?php if($statut == 'Manager'): ?>

						<?php if(!empty($projects)): ?>

							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Titre</th>
										<th scope="col">Nombre jeton</th>
										<th scope="col">Action</th>
 									</tr>
								</thead>
								<tbody>
									<?php foreach ($projects as $key => $value): ?>
										<tr>
											<th scope="row"><?= $value->id; ?></th>
											<td><?= $value->title; ?></td>
											<td><?= $value->nbToken; ?></td>
											<td>
												<button type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Voir"><i class="fas fa-eye"></i></button>
												<button type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Modifier"><i class="fas fa-pencil-alt"></i></button>
												<button type="button" class="btn btn-danger btn-sm" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Supprimer"><i class="fas fa-trash-alt"></i></button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							
						<?php else: ?>
							<div class="text-center">
								<i class="far fa-list-alt fa-5x text-black-50"></i>
								<h4 class="mt-3">Aucun projet acutellement</h4>
								<a class="btn btn-primary mt-3" href="index.php?page=add_project" role="button">Créer un projet</a>
							</div>
						<?php endif; ?>

					<?php elseif($statut == 'Contributor'): ?>
						Con
					<?php elseif($statut == 'Student'): ?>
						Stu
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>

</section>