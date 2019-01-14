<table class="table-inventory">
	<tr class="name-character">
		<th>Nom</th>
		<th>Force</th>
		<th>Vie</th>
	</tr>

	<tr class="stats-character">
		<td><?= $warriorPlayer['name']?></td>
		<td id="damages_players"><?= $warriorPlayer['damages']?></td>
		<td id="life_players"><?= $warriorPlayer['life']?></td>
	</tr>

	<tr class="objects-inventory">
		<?php 
			foreach ($objects as $object){
		?>
		<td><?= $object['name']?></td>
		<?php
		}
		?>
	</tr>
</table>
