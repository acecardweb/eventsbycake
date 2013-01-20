<?php

class Palestra extends AppModel{

	public $belongsTo = array('Palestrante');

	public $validate = array(
							'nome' => array(
												'regra_nome' => array(
																'rule' => 'isUnique',
																'required' => true,// Preenchimento Obrigatório e unico
																'allowEmpty' => false,
																'message' => 'Palestra já existe'
												)
							),
							'descricao' => array(
												'regra_descricao' => array(
																'rule' => 'notEmpty',
																'required' => true,
																'message' => 'Insira uma descrição!'
												)
							),
							'inicio' => array(
												'regra_inicio' => array(
																'rule' => 'notEmpty',
																'required' => false,
																'message' => 'Preencha o horário do início!'
												)
							),
							'fim' => array(
												'regra_fim' => array(
																'rule' => 'notEmpty',
																'required' => false,
																'message' => 'Preencha o horário do fim!'
												)
							)
	);

	
}