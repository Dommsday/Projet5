<div class="container-game container-village">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<?php
		if(isset($displaySword) && $displaySword == 1){
	?>

	<div id="sword1" class="sword sword-village-fourR">
			
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

	<div id="secret-rock-village-fourR">
		<img class="stone_img" src="/Web/images/stone.png" alt="stone" title="pierre"/>
		<a class="secret_stone" href="/game/chest-four-left.html">?</a>
	</div>
	<div id="choise-road">
		<a class="choise-left" href="/game/fight-four-right.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/fight-five-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>