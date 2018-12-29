<div class="container container-game">
	
	<div class="title-start">
		<h1><?= $textFight['title']?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textFight['content']) ?></p>
	</div>
	
	<div id ="wolf1" class="wolf">
		<i class="fab fa-wolf-pack-battalion"><?= $wolf['name']?></i>
	</div>

	<div id ="crow1" class="wolf">
		<i class="fas fa-crow"><?= $crow['name']?></i>
	</div>

	<div id="apple1" class="apple">
			
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action1" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div class="choise-road">
		<a class="choise-left" href="/game/undergrowth-six-right.html">Aller à gauche</a>
		<a class="choise-right" href="/game/village-five-right.html">Aller à droite</a>
	</div>

</div>