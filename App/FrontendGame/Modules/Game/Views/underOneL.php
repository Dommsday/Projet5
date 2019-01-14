<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>
	
	<div id="apple1" class="apple">
			
		<img class="stick" src="/Web/images/stick.png" />
		<?= $stick['name']?>

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formStick ?>
				<input id="btnApple1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-two-left.html">Aller tout droit</a>
	</div>
	

</div>