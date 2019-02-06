<div class="container-game container-fountain">
	
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


	<div id="choise-road">
		<a class="choise-left" href="/game/fight-four-left.html"><img class="arrow arrow-left" alt="arrow-left" title="flèche de gauche" src="/Web/images/arrow_left.png" /></a>
		<a class="choise-right" href="/game/chest-five-left.html"><img class="arrow arrow-right" alt="arrow-right" title="flèche de droite" src="/Web/images/arrow_right.png" /></a>
	</div>

</div>