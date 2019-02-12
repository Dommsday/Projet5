<div class="container-game container-fight">
	<audio id="audio_dead" src="/Web/sound/laugh-dead.mp3"></audio>
	<audio id="audio_pain" src="/Web/sound/pain-player.mp3"></audio>
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="bat1" class="bat bat-fightSevenR">
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

		<button id="button-attak-bat" class="button-attak-enemy btn">Attaquer</button>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/fight-seven-right.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/undergrowth-five-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>