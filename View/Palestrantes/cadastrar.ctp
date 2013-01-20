<h2> Inscreva-se</h2>

<div class="form-actions">

	<?php echo $this->form->create('Palestrante',array('action'=>'cadastrar')); ?>
	<?php echo $this->form->input('nome');?>
	<?php echo $this->form->input('descricao');?>
	<?php echo $this->form->input('site');?>
	<?php echo $this->form->Submit('Cadastrar',array('class' => 'btn btn-primary'));?>
	<?php echo $this->form->end();?>
</div> <!-- div form-action -->

