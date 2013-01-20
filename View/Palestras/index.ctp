<h2>Palestras</h2>
	<table class="table  table-striped" cellpadding="0" cellspacing="0">
			<tr>
			
					<th>Título</th>
					<th>Início</th>
					<th>Fim</th>
					<th>Descrição</th>
					<th>Palestrante</th>


			</tr>

<?php


foreach ($listadepalestras as $palestras): ?>
	
	<tr>
		<td><?php echo h($palestras['Palestra']['nome']); ?>&nbsp;</td>
		<td><?php echo date('h:i', strtotime($palestras['Palestra']['inicio'])); ?> </td>
		<td><?php echo date('h:i', strtotime($palestras['Palestra']['fim'])); ?> </td>
		<td><?php echo h($palestras['Palestra']['descricao']); ?></td>
		<td><?php 
			$palestrante = $palestras['Palestrante']['nome']; 
			$slug = Inflector::slug(strtolower($palestrante), '-');
			echo $this->Html->link($palestras['Palestrante']['nome'], '/palestrante/'.$slug.'/'.$palestras['Palestrante']['id']) ?>
		</td>
	</tr>
<?php endforeach; ?> 

</table>