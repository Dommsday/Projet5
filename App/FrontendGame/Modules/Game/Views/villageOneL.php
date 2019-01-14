<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<img class="acorn" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="apple2" class="apple">
			
		<img class="acorn" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action2" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-one-left.html">Aller tout droit</a>
	</div>

</div>