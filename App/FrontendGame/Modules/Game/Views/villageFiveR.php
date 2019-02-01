<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<?php
		if(isset($displayApple) && $displayApple  == 1){		
	?>

		<div id="apple1" class="apple1-village-Five-R apple">
				
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
		<a class="choise-top" href="/game/fight-six-right.html">Aller tout droit</a>
	</div>

</div>