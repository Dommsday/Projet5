<div class="container-game container-under">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<?php
		if(isset($displayApple) && $displayApple == 1){
		?>

		<div id="apple1" class="apple1-underFiveR apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1" class="btnApple btn"/>
				</form>
			</div>
		</div>

	<?php
	}
	?>

	<div id="chest1" class="chest chestfightSevenR">
			
		<img class="chest-img" src="/Web/images/chest.png" alt="coffre" title="Coffre"/>

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
		        <img class="parchemin_three_img parchemin_img" src="/Web/images/parchemin_three.png" />
		     </div>
		</div>
	</div>
</div>