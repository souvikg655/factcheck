<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{

		$this->load->view('index');
	}

	public function dashboard()
	{
		$this->load->view('realter_dashboard');
	}

	public function add_home()
	{
		$this->load->view('add_home');
	}

	public function registration()
	{		
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');	
		$data['password'] = md5($this->input->post('password'));
		$licence_image=$this->input->post('licence_image');

		$this->load->model('user_model');
		$flag = $this->user_model->registration_submit($data);
	}

	public function login()
	{		
		$data['name'] = $this->input->post('emailid');	
		$data['password'] = md5($this->input->post('password'));

		$this->load->model('user_model');
		$flag = $this->user_model->login_submit($data);
	}

}

?>