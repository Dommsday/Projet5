<div class="container-game container-under">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<div id="secret-rock-under-six">
		<a href="/game/fight-seven-right.html">?</a>
	</div>

	<?php
		if(isset($displayAcorn) && $displayAcorn == 1){
	?>

	<div id="acorn1" class="acorn acorn1-UnderSixR">
			
		<img class="acorn-img" src="<?= $acorn['src']?>" alt="<?= $acorn['name']?>" title="<?= $acorn['name']?>"/>
		

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<input type="hidden" name="acorn1"/>
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" class="btnAcorn btn" />
			</form>
		</div>
	</div>
	<?php
	}
	?>

	<div id="chest1" class="chest chest-under-sixR">
			
		<img class="chest-img" src="/Web/images/chest.png" />

		<div id="action_chest1" class="action_chest">
			<button type="button" id="action-open-chest" class="open_chest btn" data-toggle="modal" data-target="#underSixR">Ouvrir</button>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/impasse-three-right.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/fight-six-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>
	

</div>

<div class="modal fade" id="underSixR" tabindex="-1" role="dialog" aria-labelledby="underSixRLabel" aria-hidden="true">
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