<div class="container-game container-fight">
	
	<div class="title-start">
		<h1><?= $textFinalFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFinalFight['content']) ?></p>
	</div>

	<div id ="troll" class="troll-forest">
		<img src="/Web/images/troll.gif" class="troll_gif" alt="Troll" title="Troll de la forêt" />

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

	<div id="endgame">
		<a class="link-endgame" href="#">Fin</a>
	</div>
</div>