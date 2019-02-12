<div class="container-game container-fight">
	<audio id="audio_dead" src="/Web/sound/laugh-dead.mp3"></audio>
	<audio id="audio_pain" src="/Web/sound/pain-player.mp3"></audio>
	
	<div class="title-start">
		<h1><?= $textFinalFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFinalFight['content']) ?></p>
	</div>

	<div id ="troll" class="troll-forest">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="<?= $troll['src']?>" class="troll_gif" alt="<?= $troll['name']?>" title="<?= $troll['name']?>" />

		<table class="ennemi-character troll-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $troll['name']?></td>
				<td id="damages-troll"><?= $troll['damages']?></td>
				<td id="life-troll"><?= $troll['life']?></td>
			</tr>

		</table>

		<button type="button" id="button-attak-troll" class="button-attak-enemy btn">Attaquer</button>
	</div>
</div>