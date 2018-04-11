<section id="section-add_project">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-plus mr-1"></i> Ajouter un projet</div>
				<div class="card-body">

					<form>
						<div class="form-group">
							<label for="input-title">Titre du projet</label>
							<input type="email" class="form-control" id="input-title">
						</div>

						<div class="row form-group">
							<div class="col">
								<label for="input-ecole">École</label>
								<select class="form-control" id="input-ecole">
									<option selected></option>
									<option>EPSI</option>
									<option>WIS</option>
									<option>OSS</option>
								</select>
							</div>
							<div class="col">
								<label for="input-year">Année</label>
								<select class="form-control" id="input-year">
									<option selected></option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="col">
								<label for="input-group">Groupe</label>
								<select class="form-control" id="input-group">
									<option selected></option>
									<option>1</option>
									<option>2</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="input-description">Description du projet</label>
							<textarea class="form-control" id="input-description" rows="5"></textarea>
						</div>

						

						<button type="submit" class="btn btn-default float-left">Annuler</button>
						<button type="submit" class="btn btn-primary float-right">Créer</button>
					</form>

				</div>
			</div>
		</div>
	</div>

</section>