<div class="container-game container-impasse">
	
	<div class="title-start">
		<h1><?= nl2br($textImpasse['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textImpasse['content']) ?></p>
	</div>
	
		<?php
		if(isset($displayApple) && $displayApple  == 1){
			
		?>

		<div id="apple1" class="apple1-impasseFour apple">
				
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

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-five-right.html"><img class="arrow arrow-back" alt="arrow-back" title="flèche pour revenir en arrière" src="/Web/images/arrow_back.png" /></a>
	</div>
</div>