<div class="container-game container-chest">

	<audio id="audio_chest" src="/Web/sound/open_chest.mp3"></audio>
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="chest1" class="chest chestNineR">
			
		<img class="chest-img" src="/Web/images/chest.png" alt="coffre" title="Coffre"/>

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#chestNineR">Ouvrir</button>
		</div>
	</div>

	<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	
	<div id="stick1" class="stick stick-chestNineR">
			
		<img class="stick-img" src="<?= $stick['src']?>" alt="<?= $stick['name']?>" title="<?= $stick['name']?>"/>

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<input type="hidden" name="stick1"/>
				<?= $formStick ?>
				<input id="btnStick1" type="submit" value="Prendre" class="btnStick btn"/>
			</form>
		</div>
	</div>
	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-four-right.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/fight-two-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>

<div class="modal fade" id="chestNineR" tabindex="-1" role="dialog" aria-labelledby="chestNineRLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		    <div class="modal-header">
		       <h5 class="modal-title" id="chestNineRLabel">Un bout de parchemin</h5>
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
		    </button>
		    </div>
		     <div class="modal-body">
		        <p>Un petit bout de papier, preques détruit. On peut y apercevoir des chiffres. Vous devriez les noter quelques part</p>
		        <img class="parchemin_one_img parchemin_img" src="/Web/images/parchemin_one.png" />
		     </div>
		</div>
	</div>
</div>