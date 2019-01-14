<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="wolf1" class="wolf">
		<img src="/Web/images/wolf.gif" class="wolf_gif"/>
		<?= $wolf['name']?>
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

	<div id="apple1" class="apple">
			
		<img class="chest" src="/Web/images/chest.png" />

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Ouvrir" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>

</div>