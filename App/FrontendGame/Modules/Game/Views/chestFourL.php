<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="chest1-chestFour" class="chest chestFourL">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button class="open_chest">Ouvrir</button>
		</div>
	</div>

	<div id="stick1" class="stick stick-fight">
			
		<img class="stick-img" src="/Web/images/stick.png" />
		<?= $stick['name']?>

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<?= $formStick ?>
				<input id="btnStick1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/village-two-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/impasse-one-left.html">Aller à droite</a>
	</div>

</div>