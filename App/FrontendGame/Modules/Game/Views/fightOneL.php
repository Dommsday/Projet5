<div class="container-game container-fight">
	<audio id="audio_dead" src="/Web/sound/laugh-dead.mp3"></audio>
	<audio id="audio_pain" src="/Web/sound/pain-player.mp3"></audio>
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="bat1" class="bat">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="<?= $bat['src']?>" class="bat_gif" alt="<?= $bat['name']?>" title="<?= $bat['name']?>"/>
		

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

		<button type="button" id="button-attak-bat" class="button-attak-enemy btn">Attaquer</button>
	</div>
	
	<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	
	<div id="stick1" class="stick stick-fightOneL">
			
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
		<a class="choise-top direction" href="/game/chest-one-left.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>

