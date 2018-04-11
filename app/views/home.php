<section id="section-accueil">

	<div class="row">
		<div class="col-sm">
			<div class="card">
				<div class="card-header"><i class="fas fa-home mr-1"></i> Accueil</div>
				<div class="card-body">
					


					<?php

					if(!empty($pojects))
					{
						foreach ($pojects as $key => $value) {
							var_dump($value);
						}
					}
					else 
					{
						echo 'Aucun projet acutellement.';
					}

					?>

				</div>
			</div>
		</div>
	</div>

</section>