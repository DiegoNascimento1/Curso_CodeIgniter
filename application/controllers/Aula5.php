<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aula5 extends CI_Controller {

	public function index()
	{
		//Passando parametros
		$data['titulo'] = "Aula 5";
		$data['titulo_pagina'] = "Trabalhando com views";
		$data['conteudo'] = "Hoje estamos aprendendo a como trabalhar com Views.";

		//Carrega view
		$this->load->view('aula5_view', $data);
	}
}
