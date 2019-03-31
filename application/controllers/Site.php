<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//Carregar model
		$this->load->model('livros_model', 'livros');

		//Carregar o helper
		$this->load->helper('funcoes_helper', 'funcoes');

	}
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

	public function formulario()
	{
		
		//titulo
		$data['titulo'] = 'Formulário';

		$this->load->view('layout/topo', $data);
		$this->load->view('formulario/index');
		$this->load->view('layout/rodape');
	}

	public function enviar()
	{
		if ($this->input->post()) {
			echo '<pre>';
				print_r($this->input->post());
		}		
	}

	public function validar()
	{
		
		//titulo
		$data['titulo'] = 'Formulário de cadastro';

		//carregamento library form_validation
		$this->load->library('form_validation');

		$this->load->view('layout/topo', $data);
		$this->load->view('validar/index');
		$this->load->view('layout/rodape');
	}

}
