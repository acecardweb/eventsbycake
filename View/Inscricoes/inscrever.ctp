	<h2> Inscreva-se</h2>
	<div class="form-actions">
			<?php echo $this->form->create('Inscricao',array('action'=>'inscrever')); ?>
			<?php echo $this->form->input('nome');?>
			<?php echo $this->form->input('email');?>
			<?php echo $this->form->input('telefone');?>
			<?php echo $this->form->input('endereco',array('label'=>'Endereço'));?>
			<?php echo $this->form->input('cidade');?>
			<?php echo $this->form->Submit('Inscrever',array('class' => 'btn btn-primary'));?>
			<?php echo $this->form->end();?>
	</div>