<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="chest1" class="chest chestFourL">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#chestFourL">Ouvrir</button>
		</div>
	</div>

		<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	<div id="stick1" class="stick stick-chestFourL">
			
		<img class="stick-img" src="<?= $stick['src']?>" alt="<?= $stick['name']?>" title="<?= $stick['name']?>"/>

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<input type="hidden" name="stick1"/>
				<?= $formStick ?>
				<input id="btnStick1" type="submit" value="Prendre" class="btnStick btn" />
			</form>
		</div>
	</div>
	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-left" href="/game/village-two-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/impasse-one-left.html">Aller à droite</a>
	</div>

</div>

<div class="modal fade" id="chestFourL" tabindex="-1" role="dialog" aria-labelledby="chestFourLLabel" aria-hidden="true">
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
		        777
		     </div>
		</div>
	</div>
</div>