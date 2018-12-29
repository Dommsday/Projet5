<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textUndergrowth['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textUndergrowth['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action1" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div class="choise-road">
		<a class="choise-left" href="/game/impasse-three-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-six-right.html">Aller à droite</a>
	</div>
	

</div>