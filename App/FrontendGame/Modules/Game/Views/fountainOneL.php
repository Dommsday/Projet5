<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFountain['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFountain['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<img class="foutain" src="/Web/images/fountain.png" />

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Ouvrir" />
			</form>
		</div>
	</div>


	<div id="choise-road">
		<a class="choise-left" href="/game/fight-four-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/chest-five-left.html">Aller à droite</a>
	</div>

</div>