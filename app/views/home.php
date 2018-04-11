<section id="section-accueil">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header">
					<div class="float-left align-bottom mt-1">
						<i class="fas fa-home mr-1"></i> Accueil
					</div>

					<?php if(!empty($pojects)): ?>
						<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="tooltip" data-delay='{"show":"1000"}' title="Créer un nouveau projet">
							Créer un projet
						</button>
					<?php endif; ?>

				</div>
				<div class="card-body">
					<?php if(!empty($pojects)): ?>
						<?php foreach ($pojects as $key => $value): ?>
							<!-- / -->
						<?php endforeach; ?>
					<?php else: ?>
						<div class="text-center">
							<i class="far fa-list-alt fa-5x text-black-50"></i>
							<h4 class="mt-3">Aucun projet acutellement</h4>
							<a class="btn btn-primary mt-3" href="index.php?page=add_project" role="button">Créer un projet</a>
						</div>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div>

</section>