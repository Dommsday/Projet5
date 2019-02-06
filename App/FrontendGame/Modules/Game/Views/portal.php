<div class="container-game container-gate">
	
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

				<input type="submit" id ="valid_code" value="Valider" class="btn" />
			</form>
		</div>
	</div>	

	<div id="choise-road-end">
		<a class="choise-left" href="/game/boss-game.html"><img class="arrow arrow-top" alt="arrow-top" title="flèche pour aller tout droit" src="/Web/images/arrow_top.png" /></a>
	</div>

</div>