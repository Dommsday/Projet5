<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFountain['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFountain['content']) ?></p>
	</div>

	<div id="fountain1" class="foutain">
			
		<img class="fountain-img" src="/Web/images/fountain.png" />

		<div id="action-fountain1" class="action-fountain">
			<button type="button" id="active-fountain" class="btn">Boire</button>
		</div>
	</div>

	<div id="secret-rock-fountainTwo" class="rock">
		<a href="/game/fight-two-right.html">?</a>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/chest-four-left.html">Aller tout droit</a>
	</div>

</div>