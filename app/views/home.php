<section id="section-accueil">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-home mr-1"></i> Accueil</div>
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
					<br/>


					<table class="table table-sm">
						<thead>
							<tr>
								<th scope="col">Nom</th>
								<th scope="col">Prénom</th>
								<th scope="col">Email</th>
								<th scope="col">Type</th>
							</tr>
						</thead>
						<tbody>

							<?php

							$stmt = $con->prepare('SELECT * FROM user WHERE type = :type');
							$stmt->bindValue(':type', 3, PDO::PARAM_INT);
							$stmt->execute();

							?>

							<?php while ($user = $stmt->fetchObject()): ?>
								<tr>
									<td><?= $user->firstname; ?></td>
									<td><?= $user->lastname; ?></td>
									<td><?= $user->email; ?></td>
									<td>
										<?php
										switch ($user->type) {
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
										}
										?>

									</td>
								</tr>
							<?php endwhile; ?>

							<?php $stmt->closeCursor(); ?>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

</section>