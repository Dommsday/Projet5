<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="bat1" class="bat">
		<img src="/Web/images/bat.gif" class="bat_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $bat['name']?></td>
				<td id="damages-bat"><?= $bat['damages']?></td>
				<td id="life-bat"><?= $bat['life']?></td>
			</tr>

		</table>

		<button type="button" id="button-attak-bat" class="button-attak-enemy">Attaquer</button>
	</div>
	
	<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	
	<div id="stick1" class="stick stick-fight">
			
		<img class="stick-img" src="<?= $stick['src']?>" alt="<?= $stick['name']?>" title="<?= $stick['name']?>"/>

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<input type="hidden" name="stick1"/>
				<?= $formStick ?>
				<input id="btnStick1" type="submit" value="Prendre" class="btnStick"/>
			</form>
		</div>
	</div>
	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-top direction" href="/game/chest-one-left.html">Aller tout droit</a>
	</div>

</div>