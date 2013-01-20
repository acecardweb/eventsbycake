
	<h3> Cadastro de Palestras</h3>

	<div class="form-actions">
			<?php echo $this->form->create('Palestra',array('action'=>'cadastrar')); ?>
			<?php echo $this->form->input('nome');?>
			<?php echo $this->form->input('descricao');?>
			<?php echo $this->form->input('inicio',array(
													    'type' => 'time',
													    'timeFormat' => '24',
													    'interval' => '15'
													     )
											);?>
			<?php echo $this->form->input('fim',array(
													    'type' => 'time',
													    'timeFormat' => '24',
													    'interval' => '15'
													     )
											);?>
			<?php echo $this->form->Submit('Cadastrar',array('class'=>'btn btn-primary'));?>
			<?php echo $this->form->end();?>
</div>