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
}
