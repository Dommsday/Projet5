<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="wolf1" class="wolf">
		<img src="/Web/images/wolf.gif" class="wolf_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $wolf['name']?></td>
				<td id="damages-wolf"><?= $wolf['damages']?></td>
				<td id="life-wolf"><?= $wolf['life']?></td>
			</tr>

		</table>

		<button id="button-attak-wolf" class="button-attak-enemy">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestOne chestFight">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button class="open_chest">Ouvrir</button>
		</div>
	</div>

	<?php
		if(isset($displayApple1) && $displayApple1 == 1){
	?>

		<div id="apple1" class="apple-fight apple-fight-four">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" name="apple1" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>


	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>

</div>