<section id="section-add_project">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-plus mr-1"></i> Ajouter un projet</div>
				<div class="card-body">

					<form action="index.php?page=add_project" method="post" autocomplete="off">

						<div class="form-row">
							<div class="col-8">
								<?php
								// ------------------------------------------------------------------------------ TITLE
								$flag = null;
								if(isset($errors) && isset($errors['title'])) $flag = 'is-invalid';
								else if(isset($title)) $flag = 'is-valid';
								?>

								<label for="input-title">Titre du projet</label>
								<input type="text" class="form-control <?= $flag; ?>" id="input-title" name="title" value="<?php if(isset($title)) echo $title; ?>" maxlength="50">
								
								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['title']; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="col-2">
								<?php
								// ------------------------------------------------------------------------------ MAX
								$flag = '';
								if(isset($errors) && isset($errors['max'])) $flag = 'is-invalid';
								else if(isset($max)) $flag = 'is-valid';
								?>

								<label for="input-max">Nombre max</label>
								<input type="number" class="form-control <?= $flag; ?>" id="input-max" name="max" min="1" max="99" value="<?php if(isset($max)) echo $max; ?>">
								
								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['max']; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="col-2">
								<?php
								// ------------------------------------------------------------------------------ MAX
								$flag = '';
								if(isset($errors) && isset($errors['token'])) $flag = 'is-invalid';
								else if(isset($token)) $flag = 'is-valid';
								?>

								<label for="input-token">Quantité jeton</label>
								<input type="number" class="form-control <?= $flag; ?>" id="input-token" name="token" min="1" max="99" value="<?php if(isset($token)) echo $token; ?>">
								
								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['token']; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-row mt-2">
							<div class="col-12">
								<?php
								// ------------------------------------------------------------------------------ DESCRIPTION
								$flag = '';
								if(isset($errors) && isset($errors['description'])) $flag = 'is-invalid';
								else if(isset($description)) $flag = 'is-valid';
								?>

								<label for="input-description">Description du projet</label>
								<textarea type="text" class="form-control <?= $flag; ?>" id="input-description" rows="5" name="description"><?php if(isset($description)) echo $description; ?></textarea>
								
								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['description']; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-row mt-2">
							<div class="col">
								<?php
								// ------------------------------------------------------------------------------ DESCRIPTION
								$flag = '';
								if(isset($errors) && isset($errors['school'])) $flag = 'is-invalid';
								else if(isset($school)) $flag = 'is-valid';
								?>

								<label for="input-school">École de la classe</label>
								<select class="form-control <?= $flag; ?>" id="input-school" name="school" >
									<option <?php if(!isset($school)) echo 'selected'; ?> disabled value=""></option>
									<option <?php if(isset($school) && $school == 1) echo 'selected'; ?> value="1">EPSI</option>
									<option <?php if(isset($school) && $school == 2) echo 'selected'; ?> value="2">WIS</option>
									<option <?php if(isset($school) && $school == 3) echo 'selected'; ?> value="3">OSS</option>
								</select>

								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['school']; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="col">
								<?php
								// ------------------------------------------------------------------------------ DESCRIPTION
								$flag = '';
								if(isset($errors) && isset($errors['year'])) $flag = 'is-invalid';
								else if(isset($year)) $flag = 'is-valid';
								?>

								<label for="input-year">Année de la classe</label>
								<select class="form-control <?= $flag; ?>" id="input-year" name="year" >
									<option <?php if(!isset($year)) echo 'selected'; ?> disabled value=""></option>
									<option <?php if(isset($year) && $year == 1) echo 'selected'; ?> value="1">1ère année</option>
									<option <?php if(isset($year) && $year == 2) echo 'selected'; ?> value="2">2ème année</option>
									<option <?php if(isset($year) && $year == 3) echo 'selected'; ?> value="3">3ème année</option>
									<option <?php if(isset($year) && $year == 4) echo 'selected'; ?> value="4">4ème année</option>
									<option <?php if(isset($year) && $year == 5) echo 'selected'; ?> value="5">5ème année</option>
								</select>

								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['year']; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="col">
								<?php
								// ------------------------------------------------------------------------------ DESCRIPTION
								$flag = '';
								if(isset($errors) && isset($errors['group'])) $flag = 'is-invalid';
								else if(isset($group)) $flag = 'is-valid';
								?>

								<label for="input-group">Groupe de la classe </label>
								<select class="form-control <?= $flag; ?>" id="input-group" name="group" >
									<option <?php if(!isset($group)) echo 'selected'; ?> disabled value=""></option>
									<option <?php if(isset($group) && $group == 1) echo 'selected'; ?> value="1">Groupe 1</option>
									<option <?php if(isset($group) && $group == 2) echo 'selected'; ?> value="2">Groupe 2</option>
								</select>

								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['group']; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-row mt-2">
							<div class="col-12">
								<?php
								// ------------------------------------------------------------------------------ DESCRIPTION
								$flag = '';
								if(isset($errors) && isset($errors['contributors'])) $flag = 'is-invalid';
								else if(isset($contributors)) $flag = 'is-valid';
								?>

								<label for="input-contributor">Intervenants</label>
								<select multiple class="form-control <?= $flag; ?>" id="input-contributor" name="contributors[]">
									<?php foreach ($listContributor as $key => $value): ?>
										<option <?php if (isset($contributors) && in_array($value->id, $contributors)) echo 'selected'; ?> value="<?= $value->id; ?>"><?= $value->lastname. " " .$value->firstname; ?></option>
									<?php endforeach; ?>
								</select>
								
								<?php if($flag == 'is-invalid'): ?>
									<div class="invalid-feedback">
										<?= $errors['contributors']; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col">
								<a class="btn btn-secondary" href="index.php?page=home" role="button">Annuler</a>
								<button type="submit" name="submit" class="btn btn-primary float-right">Créer</button>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

</section>