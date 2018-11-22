<div class="container container-all-characters">

<div class="all-characters-title">
	<h1>Listes des personnages</h1>
</div>

<table class="all-characters-table">
	<tr>
		<th>Nom</th>
		<th>Dégâts</th>
		<th>Vie</th>
	</tr>

	<?php 
		foreach ($characters as $character){
	?>

	<tr>
		<td><?= $character['name'] ?></td>
		<td><?= $character['damages'] ?></td>
		<td><?= $character['life'] ?></td>
	</tr>

	<?php
	}
	?>
</table>

</div>