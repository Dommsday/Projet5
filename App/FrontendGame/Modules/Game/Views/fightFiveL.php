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

		<button id="button-attak-bat" class="button-attak-enemy">Attaquer</button>
	</div>

	<?php
		if(isset($display) && $display == 1){
	?>

		<div id="apple1" class="apple1-fightFiveL apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-top" href="/game/fountain-two-left.html">Aller tout droit</a>
	</div>
	
</div>