<div class="container-game container-fight">
	<audio id="audio_dead" src="/Web/sound/laugh-dead.mp3"></audio>
	<audio id="audio_pain" src="/Web/sound/pain-player.mp3"></audio>
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="demon1" class="demon demon-fight-FiveR">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="<?= $demon['src']?>" class="devil_gif" alt="<?= $demon['name']?>" title="<?= $demon['name']?>"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $demon['name']?></td>
				<td id="damages-demon"><?= $demon['damages']?></td>
				<td id="life-demon"><?= $demon['life']?></td>
			</tr>

		</table>

		<button type="button" id="button-attak-demon" class="button-attak-enemy btn">Attaquer</button>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/impasse-dead.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>