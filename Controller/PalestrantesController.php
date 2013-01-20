<?php


class PalestrantesController extends AppController {
	public function index(){
			// Encontra todas as notícias
			$p = $this->Palestrante->find('all');
	// Manda para a View
			$this->set('listadepalestrantes', $p);

	}	

	//Cadastra Palestrantes
	public function cadastrar(){
			$isPost = $this->request->is('post'); 
			if($isPost && !empty($this->request->data)){
				if($this->Palestrante->save($this->request->data)){
						$this->Session->setFlash(__('Palestrante cadastrado com sucesso!', true));
						$this->redirect('/obrigado');
				}else{
						$this->Session->setFlash(__('Erro ao salvar dados!'));
					 }

			}

	}

	public function view($id) {
			$this->Palestrante->id = $id;
			$dados = $this->Palestrante->read();
			$this->set('palestrante', $dados);
	}

}