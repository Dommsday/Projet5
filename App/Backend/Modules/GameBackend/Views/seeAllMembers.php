<div class="all-resume col-lg-12 col-xl-12">
<table>
	<tr>
		<th class="pseudo">Pseudo</th>
		<th class="email">Email</th>
		<th class="date">Date</th>
		<th class="action">Action</th>
	</tr>

	<?php
	foreach ($members as $member){
	?>

	<tr>
		<td class="pseudo"><?= $member['pseudo'] ?></td>
		<td class="email"><?= $member['email'] ?></td>
		<td class="date"><?= $member['date'] ?></td>

		<td class="action">
			<a href="delete-member-<?= $member['id']?>.html"><i class="fas fa-trash-alt"></i></a>
		</td>
	</tr>

	<?php
	}
	?>


</table>
</div>

<p><a class="link " href="/admin/">Retour</a></p>