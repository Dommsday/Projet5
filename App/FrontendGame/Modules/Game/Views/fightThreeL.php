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

		<button id="button-attak-wolf">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button class="open_chest">Ouvrir</button>
		</div>
	</div>

	<div id="acorn1" class="acorn acorn1-fight-three">
			
		<img class="acorn-img" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="acorn2" class="acorn acorn2-fight-three">
			
		<img class="acorn-img" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>

</div>