<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Cliente_model');
	}

	public function index()
	{
		$data["cliente"] = $this->Cliente_model->getAll();
		$this->load->view('cliente', $data);
	}

	public function inserir()
	{
		$this->load->view('register');
	}

	public function criar()
	{
       // if (!$this->input->is_ajax_request()) 
		//	exit("Nenhum acesso de script direto permitido!");
		// 
       $json = array();
		
        
        $guid = bin2hex(openssl_random_pseudo_bytes(16));
        
         //Armazenando em um array os dados do clinete recebido via formulario
		$data = array(
            'id' => $guid,
			'nome' => $this->input->post('nome'),
			'sobrenome' => $this->input->post('sobrenome'),
            'idade' => $this->input->post('idade'),
			'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado')
		);
        
        $this->Cliente_model->add($data);
        
        $json["status"] = 1;
        
        echo json_encode($json);

        //Redirecionando para página cliente, em que é exibido todos os dados de todos clientes
		//redirect(base_url('cliente'));
	}


	public function edit()
	{
		$id = $this->uri->segment(3);

		$where = array('id' => $id);
		$data['cliente'] = $this->Cliente_model->edit_data($where);
		$this->load->view('edit', $data);
	}

	public function update()
	{
        $id = $this->input->post('id');
        //$id = $this->uri->segment(3);
        $where = array('id' => $id);
        
        
		$nome = $this->input->post('nome');
		$sobrenome = $this->input->post('sobrenome');
        $idade = $this->input->post('idade');
		$cidade = $this->input->post('cidade');
        $estado = $this->input->post('estado');
        
        
		$data = array(
			'nome' => $this->input->post('nome'),
			'sobrenome' => $this->input->post('sobrenome'),
            'idade' => $this->input->post('idade'),
			'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado')
		);
        
		$this->Cliente_model->update($where, $data);
        
        $json["status"] = 1;
        
        echo json_encode($json);
        
		//redirect(base_url('cliente'));
	}

	public function remover()
	{
		$id = $this->uri->segment(3);

		$where = array('id' => $id);

		$this->Cliente_model->delete($where);
        
        $json["status"] = 1;
        
        echo json_encode($json);
		//redirect(base_url('cliente'));
	}


}
