<div class="container-game container-impasse">
	
	<div class="title-start">
		<h1><?= nl2br($textImpasseDead['title']) ?></h1>
	</div>

	<div class="text-start">
		<p><?= nl2br($textImpasseDead['content']) ?></p>
	</div>

	<a class="link-impasse-dead-game" href="delete-inventory-<?= $user->getAttribute('id') ?>.html" id="deconnexion">Revenir au menu principal</a>
</div>