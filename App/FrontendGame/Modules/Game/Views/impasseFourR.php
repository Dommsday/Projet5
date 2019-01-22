<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textImpasse['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textImpasse['content']) ?></p>
	</div>

	<div id="apple1" class="apple apple1-impasseFour">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<div id="apple2" class="apple apple2-impasseFour">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action2" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple2"/>
				</form>
			</div>
		</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-five-right.html">Retour en arrière</a>
	</div>
</div>