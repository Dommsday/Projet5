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

	<div id="apple2" class="apple">
			
		<i class="fas fa-apple-alt"><?= $apple['name']?></i>

		<div id="action2" class="action">
			<button>Manger</button>
			<button>Stocker</button>
		</div>
	</div>

	<div class="choise-road">
		<a class="choise-top" href="/game/portal-left.html">Aller tout droit</a>
	</div>

</div>