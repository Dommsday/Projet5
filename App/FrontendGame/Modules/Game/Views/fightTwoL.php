<div class="container-game container-fight">
	<audio id="audio_dead" src="/Web/sound/laugh-dead.mp3"></audio>
	<audio id="audio_pain" src="/Web/sound/pain-player.mp3"></audio>
	<audio id="audio_chest" src="/Web/sound/open_chest.mp3"></audio>
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="crow1" class="crow crow-fight-two">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="<?= $crow['src']?>" class="crow_gif" alt="<?= $crow['name']?>" title="<?= $crow['name']?>"/>

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

		<button type="button" id="button-attak-crow" class="button-attak-enemy">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestTwoL">
			
		<img class="chest-img" src="/Web/images/chest.png" alt="coffre" title="Coffre"/>

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#fightTwoL">Ouvrir</button>
		</div>
	</div>


	
	<div id="choise-road">
		<a class="choise-left" href="/game/fountain-one-left.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/undergrowth-two-left.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>

<div class="modal fade" id="fightTwoL" tabindex="-1" role="dialog" aria-labelledby="fightTwoLLabel" aria-hidden="true">
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
		        <img class="parchemin_two_img parchemin_img" src="/Web/images/parchemin_two.png" />
		     </div>
		</div>
	</div>
</div>