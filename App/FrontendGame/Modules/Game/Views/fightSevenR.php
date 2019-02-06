<div class="container-game container-fight">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>

		<div id ="crow1" class="crow">
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

		<button id="button-attak-crow" class="button-attak-enemy btn">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestfightSevenR">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#fightSevenR">Ouvrir</button>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>

<div class="modal fade" id="fightSevenR" tabindex="-1" role="dialog" aria-labelledby="fightSevenRLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
		       <h5 class="modal-title" id="chestOneLLabel">Un bout de parchemin</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		    </button>
		    </div>
		     <div class="modal-body">
		        <p>Un petit bout de papier, preques détruit. On peut y apercevoir des chiffres. Vous devriez les noter quelques part</p>
		        88
		     </div>
		</div>
	</div>
</div>