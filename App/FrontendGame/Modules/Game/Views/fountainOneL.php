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
			<button id="active-fountain">Boire</button>
		</div>
	</div>


	<div id="choise-road">
		<a class="choise-left" href="/game/fight-four-left.html">Aller à gauche</a>
		<a class="choise-right" href="/game/chest-five-left.html">Aller à droite</a>
	</div>

</div>