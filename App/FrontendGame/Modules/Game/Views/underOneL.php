<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>
	
	<div id="stick2" class="stick stick-under">
			
		<img class="stick-img" src="/Web/images/stick.png" />
		<?= $stick['name']?>

		<div id="action-stick2" class="action-stick">
			<form action="" method="post">
				<?= $formStick ?>
				<input id="btnStick2" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-two-left.html">Aller tout droit</a>
	</div>
	

</div>