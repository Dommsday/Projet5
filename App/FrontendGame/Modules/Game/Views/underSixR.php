<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<a href="/game/fight-seven-right.html">?</a>
	
	<div id="acorn1" class="acorn acorn-village-one">
			
		<img class="acorn-img" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	

	<div id="choise-road">
		<a class="choise-left" href="/game/impasse-three-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-six-right.html">Aller à droite</a>
	</div>
	

</div>