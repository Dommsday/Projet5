<div class="container-game container-index">

	<div class="title-start">
		<h1><?= $textStart['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textStart['content']) ?></p>
	</div>

	<div id="all-apple">

		<?php
		if(isset($displayApple) && $displayApple  == 1){
			
		?>

		<div id="apple1" class="apple1-index apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" name="apple1" value="Prendre" id="btnApple1" class="btnApple"/>
				</form>
			</div>
		</div>

		<?php
		}
		?>	
	
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/fight-one-left.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/fight-one-right.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>