<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textPortal['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textPortal['content']) ?></p>
	</div>

	<div id="gate1" class="gate gate-end">
			
		<img class="gate-img" src="/Web/images/gate.png" />

		<div id="action_portal1" class="action_gate">
			<form id="form_gate" name="form_gate" action="" method="post">
				<input type="number" id="number_1" value="0" min="0" max="9" />
				<input type="number" id="number_2" value="0" min="0" max="9" />
				<input type="number" id="number_3" value="0" min="0" max="9" />
				<input type="number" id="number_4" value="0" min="0" max="9" />
				<input type="number" id="number_5" value="0" min="0" max="9" />
				<input type="number" id="number_6" value="0" min="0" max="9" />

				<input type="submit" id ="valid_code" value="Valider" />
			</form>
		</div>
	</div>

	<div id="all-apple-gate">

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

	<div id="choise-road-end">
		<a class="choise-left" href="/game/boss-game.html">Aller tout droit</a>
	</div>

</div>