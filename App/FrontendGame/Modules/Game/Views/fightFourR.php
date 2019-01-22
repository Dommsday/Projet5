<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

	<div id ="crow1" class="crow crow-fightFourR">
		<img src="/Web/images/crow.gif" class="crow_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $crow['name']?></td>
				<td id="damages-crow"><?= $crow['damages']?></td>
				<td id="life-crow"><?= $crow['life']?></td>
			</tr>

		</table>

		<button id="button-attak-crow">Attaquer</button>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/fight-seven-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/undergrowth-five-right.html">Aller à droite</a>
	</div>

</div>