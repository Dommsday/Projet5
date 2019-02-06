<div class="container-game container-village">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="secret-rock-ville-two-L">
		<a class="secret" href="/game/fight-three-left.html">?</a>
	</div>
	<div id="all-apple">

		<?php
		if(isset($displayApple) && $displayApple == 1){
		?>

		<div id="apple1" class="apple1-villageTwo apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1" class="btnApple"/>
				</form>
			</div>
		</div>

		<?php
		}
		?>
		
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/undergrowth-three-left.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/impasse-two-left.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>	
	</div>

</div>