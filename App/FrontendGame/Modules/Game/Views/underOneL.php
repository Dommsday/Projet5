<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<?php
		if(isset($displayStick) && $displayStick == 1){
	?>
	<div id="stick1" class="stick stick-underOne">
			
		<img class="stick-img" src="<?= $stick['src']?>" alt="<?= $stick['name']?>" title="<?= $stick['name']?>"/>
		

		<div id="action-stick1" class="action-stick">
			<form action="" method="post">
				<input type="hidden" name="stick1"/>
				<?= $formStick ?>
				<input id="btnStick1" type="submit" value="Prendre" class="btnStick" />
			</form>
		</div>
	</div>
	<?php
	}
	?>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-two-left.html">Aller tout droit</a>
	</div>
	

</div>