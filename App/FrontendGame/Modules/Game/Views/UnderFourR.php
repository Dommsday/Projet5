<div class="container-game container-under">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start underFour">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<?php
		if(isset($displayAcorn) && $displayAcorn == 1){
	?>

	<div id="acorn1" class="acorn acorn1-UnderFourR">
			
		<img class="acorn-img" src="<?= $acorn['src']?>" alt="<?= $acorn['name']?>" title="<?= $acorn['name']?>" />
		
		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<input type="hidden" name="acorn1"/>
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" class="btnAcorn"/>
			</form>
		</div>
	</div>

	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-top" href="/game/village-three-right.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>