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

		<button id="button-attak-bat">Attaquer</button>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-six-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/village-five-right.html">Aller à droite</a>
	</div>

</div>