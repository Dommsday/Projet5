<div class="container-game container-impasse">
	
	<div class="title-start">
		<h1><?= nl2br($textImpasse['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textImpasse['content']) ?></p>
	</div>

	<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	
	<div id="stick1" class="stick stick-impasse-two">
			
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
		<a class="choise-back" href="/game/village-two-left.html"><img class="arrow arrow-back" alt="arrow-back" title="flèche pour revenir en arrière" src="/Web/images/arrow_back.png" /></a>
	</div>
</div>