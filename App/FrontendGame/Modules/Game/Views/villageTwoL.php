<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<a class="secret" href="/game/fight-three-left.html">?</a>

	<div id="all-apple">

		<div id="apple1" class="apple apple1-villageTwo">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<div id="apple2" class="apple apple2-villageTwo">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action2" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple2"/>
				</form>
			</div>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-three-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/impasse-two-left.html">Aller à droite</a>	
	</div>

</div>