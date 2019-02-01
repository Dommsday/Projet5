<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<?php
		if(isset($displayAcorn) && $displayAcorn == 1){
	?>

	<div id="acorn1" class="acorn acorn-village-one">
			
		<img class="acorn-img" src="<?= $acorn['src']?>" alt="<?= $acorn['name']?>" title="<?= $acorn['name']?>"/>

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
		<a class="choise-top" href="/game/undergrowth-one-left.html">Aller tout droit</a>
	</div>

</div>