<section id="section-add_project">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-plus mr-1"></i> Ajouter un projet</div>
				<div class="card-body">

					<form action="index.php?page=add_project" method="post">

						<div class="row form-group">
							<div class="col-10">
								<label for="input-title">Titre du projet</label>
								<input type="text" class="form-control" id="input-title" name="title">
							</div>
							<div class="col-2">
								<label for="input-jeton">Jeton</label>
								<input type="number" class="form-control" id="input-jeton" name="token" placeholder="0" min="0" max="99">
							</div>
						</div>

						<div class="form-group">
							<label for="input-description">Description du projet</label>
							<textarea class="form-control" id="input-description" name="description" rows="5"></textarea>
						</div>
						<div class="row form-group">
							<div class="col">
								<label for="input-school">École de la classe</label>
								<select class="form-control" id="input-school" name="school">
									<option selected></option>
									<option value="1">EPSI</option>
									<option value="2">WIS</option>
									<option value="3">OSS</option>
								</select>
							</div>
							<div class="col">
								<label for="input-year">Année de la classe</label>
								<select class="form-control" id="input-year" name="year">
									<option selected></option>
									<option value="1">1ère année</option>
									<option value="2">2ème année</option>
									<option value="3">3ème année</option>
									<option value="4">4ème année</option>
									<option value="5">5ème année</option>
								</select>
							</div>
							<div class="col">
								<label for="input-group">Groupe de la classe </label>
								<select class="form-control" id="input-group" name="group">
									<option selected></option>
									<option value="1">Groupe 1</option>
									<option value="2">Groupe 2</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="input-intervenant">Intervenants</label>
							<select multiple class="form-control" id="input-intervenant">

								<?php foreach ($contributors as $key => $value): ?>
									<option value="<?= $value->id; ?>"><?= $value->lastname. " " .$value->firstname; ?></option>
								<?php endforeach; ?>

							</select>
						</div>
						<a class="btn btn-secondary" href="index.php?page=home" role="button">Annuler</a>
						<button type="submit" name="submit" class="btn btn-primary float-right">Créer</button>
					</form>

				</div>
			</div>
		</div>
	</div>

</section>