<h2>Palestrantes</h2>
	<table class="table  table-striped" cellpadding="0" cellspacing="0">
	<tr>
			<th>Nome</th>
			<th>Descricao</th>
	</tr>

<?php
foreach ($listadepalestrantes as $palestrantes): ?>
	<tr>
		<td><?php echo h($palestrantes['Palestrante']['nome']); ?>&nbsp;</td>
		<td><?php echo h($palestrantes['Palestrante']['descricao']); ?></td>
	</tr>
<?php endforeach; ?>
</table>