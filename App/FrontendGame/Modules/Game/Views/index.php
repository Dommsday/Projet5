<div class="container container-game">
	
	<p>Bonjour <?= $user->getAttribute('pseudo')?></p>
	<p>Ton ID est  <?= $user->getAttribute('id')?></p>

	<div class="title-start">
		<h1><?= $textStart['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textStart['content']) ?></p>
	</div>

	<div id="all-apple">

		<?php
		if(isset($display) && $display  == 1){
			
		?>

		<div id="apple1" class="apple1-index apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" name="apple1" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<?php
		}
		?>	

	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/fight-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-one-right.html">Aller à droite</a>
	</div>

</div>