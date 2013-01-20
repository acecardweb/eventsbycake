<?php


class InscricoesController extends AppController {


	public function inscrever(){
		$isPost = $this->request->is('post');

		if($isPost && !empty($this->request->data)){

			if($this->Inscricao->save($this->request->data)){

					$this->Session->setFlash('Salvo com sucesso');

			}else{
				  	$this->Session->setFlash(__('Erro ao salvar'));
			}

		}



	}


public function index() {




	}

}

