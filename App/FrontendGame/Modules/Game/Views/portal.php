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

		<?php
		if(isset($display) && $display == 1){
		?>

		<?php
		}
		?>

			

	<div id="choise-road-end">
		<a class="choise-left" href="/game/boss-game.html">Aller tout droit</a>
	</div>

</div>