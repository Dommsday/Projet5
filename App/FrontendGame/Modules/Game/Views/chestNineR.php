<div class="container container-game">
	
	<div class="title-start">
		<h1><?= nl2br($textChest['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textChest['content']) ?></p>
	</div>

	<div id="apple1" class="apple">
			
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action1" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div class="choise-road">
		<a class="choise-left" href="/game/undergrowth-four-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/fight-two-right.html">Aller à droite</a>
	</div>

</div>