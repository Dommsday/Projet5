<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button class="open_chest">Ouvrir</button>
		</div>
	</div>

	<div id="sword1" class="sword swordOne">
			
		<img class="sword-img" src="/Web/images/sword.png" />
		<?= $sword['name']?>

		<div id="action_sword1" class="action_sword">
			<form action="" method="post">
				<?= $formSword ?>
				<input id="btnSword1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/village-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-five-left.html">Aller à droite</a>
	</div>

</div>