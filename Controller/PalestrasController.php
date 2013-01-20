<?php

class PalestrasController extends AppController{
	public function index(){
	// Encontra todas as notícias
			$p = $this->Palestra->find('all');
	// Manda para a View
			$this->set('listadepalestras', $p);


	}	
	public function cadastrar(){
		$isPost = $this->request->is('post');
		if($isPost && !empty($this->request->data)){
			if($this->Palestra->save($this->request->data)){
				$this->Session->setFlash(__('Palestra cadastrada com sucesso!', true));
				$this->redirect('/obrigado');
			}else{
								print_r($this->request->data);

				  	$this->Session->setFlash(__('Erro ao salvar'));
			}

		}
		
	}


}