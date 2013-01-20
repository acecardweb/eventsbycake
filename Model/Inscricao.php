<?php 
/**
* 
*/
class Inscricao extends AppModel{

	public $validate = array(
							'nome' => array(
												'regra_nome' => array(
																'rule' => 'notEmpty',
																'required' => true,// Preenchimento Obrigatório
																'message' => 'Preenchimento Obrigatório'
												)
							),
							'email' => array(
												'regra_email' => array(
																'rule' => 'email',
																'required' => true,
																'message' => 'Email inválido!'
												)
							),
							'telefone' => array(
												'regra_telefone' => array(
																'rule' => 'numeric',
																'required' => true,
																'message' => 'Caracteres Inválidos!'
												)
							),
							'endereco' => array(
												'regra_endereco' => array(
																'rule' => array('minLength', '10'),
																'required' => true,
																'message' => 'Mínimo de 10 caracteres!'
												)
							),
							'cidade' => array(
												'regra_cidade'	=> array(
																'rule' => array('minLength', '3'),
																'required' => true,
																'message' => 'Mínimo de 3 caracteres!'
												)
							)

	);

}


 