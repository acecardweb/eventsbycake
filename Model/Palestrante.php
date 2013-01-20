<?php

class Palestrante extends AppModel{

	public $hasMany = array('Palestras');

	public $displayField = 'nome';

	public $validate = array(
							'nome' => array(
												'regra_nome' => array(
																'rule' => 'notEmpty',
																'required' => true,// Preenchimento Obrigatório
																'message' => 'Preenchimento Obrigatório'
												)
							),
							'descricao' => array(
												'regra_descricao' => array(
																'rule' => 'notEmpty',
																'required' => true,
																'message' => 'Insira uma descrição!'
												)
							),
							'site' => array(
												'regra_site' => array(
																'rule' => 'url',
																'allowEmpty' => true,
																'message' => 'URL Inválida!'
												)
							)

	);

	
}