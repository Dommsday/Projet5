<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textPortal['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textPortal['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<img class="gate" src="/Web/images/gate.png" />

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Ouvrir" />
			</form>
		</div>
	</div>

	<div id="apple1" class="apple">
			
		<img class="apple" src="/Web/images/apple.png" />
		<?= $apple['name']?>

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formApple ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="apple2" class="apple">
			
		<img class="apple" src="/Web/images/apple.png" />
		<?= $apple['name']?>

		<div id="action2" class="action">
			<form action="" method="post">
				<?= $formApple ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="apple3" class="apple">
			
		<img class="apple" src="/Web/images/apple.png" />
		<?= $apple['name']?>

		<div id="action3" class="action">
			<form action="" method="post">
				<?= $formApple ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div class="id">
		<a class="choise-left" href="/game/boss-game.html">Aller tout droit</a>
	</div>

</div>