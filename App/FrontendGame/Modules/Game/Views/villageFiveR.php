<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="apple1" class="apple apple1-villageFive">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<div id="apple2" class="apple apple2-villageFive">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action2" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple2"/>
				</form>
			</div>
		</div>

	<a href="/game/fight-seven-right.html">?</a>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-six-right.html">Aller tout droit</a>
	</div>

</div>