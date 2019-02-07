<div class="container-game container-fight">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="golem1" class="golem golem-fight-sixR">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="/Web/images/golem.gif" class="golem_gif"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $golem['name']?></td>
				<td id="damages-golem"><?= $golem['damages']?></td>
				<td id="life-golem"><?= $golem['life']?></td>
			</tr>

		</table>

		<button type="button" id="button-attak-golem" class="button-attak-enemy btn">Attaquer</button>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-six-right.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/village-five-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>