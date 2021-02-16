<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gastos extends CI_Controller {

	public function index()
	{
		$this->load->view('listar_gastos');
	}

    public function novo()
	{
		$this->load->view('novo_gasto');
	}
}
