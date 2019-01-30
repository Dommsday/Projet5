<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<?php
		if(isset($display) && $display == 1){
		?>

		<div id="apple1" class="apple1-underFiveR apple">
				
			<img class="apple-img" src="<?= $apple['src']?>" alt="<?= $apple['name']?>" title="<?= $apple['name']?>"/>

			<div id="action1" class="action">
				<form action="" method="post">
					<input type="hidden" name="apple1"/>
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<?php
		}
		?>

	<div id="choise-road">
		<a class="choise-top" href="/game/portal.html">Aller tout droit</a>
	</div>
	

</div>