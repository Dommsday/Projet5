<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<img class="chest" src="/Web/images/chest.png" />

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Ouvrir" />
			</form>
		</div>
	</div>

	<div id="apple2" class="apple">
			
		<img class="sword" src="/Web/images/sword.png" />
		<?= $sword['name']?>

		<div id="action2" class="action">
			<form action="" method="post">
				<?= $formSword ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/village-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-five-left.html">Aller à droite</a>
	</div>

</div>