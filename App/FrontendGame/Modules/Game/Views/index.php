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

		<div id="apple1" class="apple">
				
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action1" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple1"/>
				</form>
			</div>
		</div>

		<div id="apple2" class="apple apple2-index">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action2" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple2"/>
				</form>
			</div>
		</div>

		<div id="apple3" class="apple apple3-index">

			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action3" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple3"/>
				</form>
			</div>
		</div>

		<div id="apple4" class="apple apple4-index">
			
			<img class="apple-img" src="/Web/images/apple.png" />
			<?= $apple['name']?>

			<div id="action4" class="action">
				<form action="" method="post">
					<?= $formApple ?>
					<input type="submit" value="Prendre" id="btnApple4"/>
				</form>
			</div>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-left" href="/game/fight-one-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-one-right.html">Aller à droite</a>
	</div>

</div>