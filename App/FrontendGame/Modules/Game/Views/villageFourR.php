<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textVillage['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textVillage['content']) ?></p>
	</div>

	<div id="apple1" class="apple aplle1-villageFourR">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
	</div>

	<div id="acorn1" class="acorn acorn-villageFourR">
			
		<img class="acorn-img" src="/Web/images/acorn.png" />
		<?= $acorn['name']?>

		<div id="action-acorn1" class="action-acorn">
			<form action="" method="post">
				<?= $formAcorn ?>
				<input id="btnAcorn1" type="submit" value="Prendre" />
			</form>
		</div>
	</div>

	<a href="/game/chest-four-left.html">?</a>

	<div id="choise-road">
		<a class="choise-top" href="/game/fight-four-right.html">Aller à gauche</a>
		<a class="choise-top" href="/game/fight-five-right.html">Aller à droite</a>
	</div>

</div>