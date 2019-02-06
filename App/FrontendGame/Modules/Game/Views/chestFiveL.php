<div class="container-game container-chest">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<?php
		if(isset($displayApple) && $displayApple == 1){
	?>

		<div id="apple1" class="apple apple-chestFive">
				
			<img class="apple-img" src="<?= $apple['src']?>" />

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" class="btn btnApple" id="btnApple1"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>

	<div id="chest1" class="chest chestOne">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" class="open_chest btn" id="action-open-chest" data-toggle="modal" data-target="#chestFiveL">Ouvrir</button>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>

<div class="modal fade" id="chestFiveL" tabindex="-1" role="dialog" aria-labelledby="chestFiveLLabel" aria-hidden="true">
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