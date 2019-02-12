<div class="container container-all-characters">

		<div class="all-characters-title">
			<h1>Listes des personnages/bestiaires</h1>
		</div>

		<div id="all-container-characters">
			<?php 
				foreach ($allCharacters as $character){
			?>
				<div class="container-characters">
					
					<div class="container-name-characters">
						<h1><?= $character['name'] ?></h1>
					</div>
					<div class="container-gif-characters">
						<img src="<?= $character['src'] ?>" alt="<?= $character['name'] ?>" title="<?= $character['name'] ?>" />
					</div>
					<div class="container-stats-characters">

						<p class="p-stat-damages">Dégâts : <span class="stat-damages"><?= $character['damages'] ?></span></p>
						<p class="p-stat-life">Vie : <span class="stat-life"><?= $character['life'] ?></span></p>

					</div>
				</div>
			<?php
				}
			?>
		</div>

		<div id="container-link-back" class="link-all-characters">
			<a href="/" id="link-back">Back</a>
		</div>
</div>
