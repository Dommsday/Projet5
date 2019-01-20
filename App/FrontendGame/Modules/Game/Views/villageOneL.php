<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

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

	<div id="acorn2" class="acorn acorn-village-one">
			
		<img class="acorn-img" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action-acorn2" class="action-acorn">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnAcorn2" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-one-left.html">Aller tout droit</a>
	</div>

</div>