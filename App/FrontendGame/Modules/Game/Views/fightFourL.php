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

	<div id ="wolf1" class="wolf wolf-fight-four">
		<h1 id="message_fail">Il vous a loupé</h1>
		<img src="<?= $wolf['src']?>" class="wolf_gif" alt="<?= $wolf['name']?>" title="<?= $wolf['name']?>"/>

		<table class="ennemi-character">
			<tr class="name-character">
				<th>Nom</th>
				<th>Force</th>
				<th>Vie</th>
			</tr>

			<tr class="stats-character">
				<td><?= $wolf['name']?></td>
				<td id="damages-wolf"><?= $wolf['damages']?></td>
				<td id="life-wolf"><?= $wolf['life']?></td>
			</tr>

		</table>

		<button id="button-attak-wolf" class="button-attak-enemy">Attaquer</button>
	</div>

	<div id="chest1" class="chest chestFightFour-L">
			
		<img class="chest-img" src="/Web/images/chest.png" alt="coffre" title="Coffre"/>

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest" data-toggle="modal" data-target="#fightFourL">Ouvrir</button>
		</div>
	</div>

	<?php
		if(isset($displayApple) && $displayApple == 1){
	?>

		<div id="apple1" class="apple-fight-four apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>" />

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" name="apple1" value="Prendre" id="btnApple1" class="btnApple"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>


	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>

<div class="modal fade" id="fightFourL" tabindex="-1" role="dialog" aria-labelledby="fightFourLLabel" aria-hidden="true">
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
		        <img class="parchemin_three_img parchemin_img" src="/Web/images/parchemin_three.png" />
		     </div>
		</div>
	</div>
</div>