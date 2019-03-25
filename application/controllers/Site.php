<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		//titulo
		$data['titulo']= "Aula usando bootstrap 4";

		$this->load->view('layout/topo', $data);
		$this->load->view('site/conteudo');
		$this->load->view('layout/rodape');
	}

	public function livros(){

		//titulo
		$data['titulo']= "Lista de livros";

		//Carregar model
		$this->load->model('livros_model', 'livros');

		//Carregar o helper
		$this->load->helper('funcoes_helper', 'funcoes');

		//Carrega dados do BD
		$data['livros'] = $this->livros->listarLivros();

		$this->load->view('layout/topo', $data);
		$this->load->view('livros/index');
		$this->load->view('layout/rodape');
	}

	public function info($id = NULL)		
	{
		if ($id == NULL) {
			
			echo 'Você precisa passar um id Valido';

		} else {
			
			//Carregar model
			$this->load->model('livros_model', 'livros');

			//Carregar o helper
			$this->load->helper('funcoes_helper', 'funcoes');

			//Carrega dados do BD
			$query = $this->livros->getById($id);

			if ($query) {
				
				//titulo
				$data['titulo'] = $query->nome_livro;
				$data['info'] = $query;

				$this->load->view('layout/topo', $data);
				$this->load->view('livros/info');
				$this->load->view('layout/rodape');

			} else {

				echo 'Você precisa passar um id Valido';
			
			}
			

		}
	}
}
