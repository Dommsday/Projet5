<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="crow1" class="crow">
		<img src="/Web/images/crow.gif" class="crow_gif"/>
		<?= $crow['name']?>
	</div>

	<div id="apple1" class="apple">
			
		<img class="chest" src="/Web/images/chest.png" />

		<div id="action1" class="action">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnApple1" type="submit" value="Ouvrir" />
			</form>
		</div>
	</div>
	
	<div id="choise-road">
		<a class="choise-left" href="/game/fountain-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/undergrowth-two-left.html">Aller à droite</a>
	</div>

</div>