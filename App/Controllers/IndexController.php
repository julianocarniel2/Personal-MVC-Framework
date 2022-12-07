<?php

namespace App\Controllers;
use JC\Controller\Action;
use App\Models\Produto;
use App\Models\Info;
use JC\Model\Container;

class IndexController extends Action {
	
	public function index() {

	
		
		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;
	
	
		$this->render('index', 'layout2');
		
	}

	
	public function sobreNos(){
		
		$info = Container::getModel('Info');

	
		$info->getInfo();
		$informacoes = $info->getInfo();

		
		$this->view->dados = $informacoes;

		$this->render('sobreNos', 'layout1');
	}

	

	
}


?>