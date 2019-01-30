<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<?php
		if(isset($display) && $display == 1){
	?>

	<div id="sword1" class="sword swordOne">
			
		<img class="sword-img" src="<?= $sword['src']?>" alt="<?= $sword['name']?>" title="<?= $sword['name']?>"/>
		

		<div id="action_sword1" class="action_sword">
			<form action="" method="post">
				<input type="hidden" name="sword1"/>
				<?= $formSword ?>
				<input id="btnSword1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<?php
	}
	?>

	<a href="/game/chest-four-left.html">?</a>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-four-right.html">Aller à gauche</a>
		<a class="choise-top" href="/game/fight-five-right.html">Aller à droite</a>
	</div>

</div>