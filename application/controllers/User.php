<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library('upload');
		$this->load->model('user_model');
	}

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
		
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width']  = '20000';
		$config['max_height']  = '30000';
		
		$this->upload->initialize($config);
		echo "AAA";

		if (!$this->upload->do_upload('licence_image')) {

			print_r( $this->upload->display_errors());
		}
		else
		{
			$filedata = $this->upload->data();
			//print_r($filedata);
			$filename = $filedata['file_name'];
			

			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');	
			$data['password'] = md5($this->input->post('password'));
			$data['licence_image'] = $filename;	
			
			$flag = $this->user_model->registration_submit($data);

		}


		
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