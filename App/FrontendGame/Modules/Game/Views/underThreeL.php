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

	<div id="apple2" class="apple">
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action2" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div id="choise-road">
		<a class="choise-top" href="/game/impasse-dead.html">Aller tout droit</a>
	</div>
	
</div>