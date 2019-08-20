<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library('upload');
		$this->load->model('user_model');
		$this->load->model('home_model');
		
	}

	public function index()
	{	
		if($this->session -> userdata('id')!=''){
			redirect('/home/dashboard');
		}else{
			$this->load->view('index');
		}
		
	}

	public function add_home()
	{	

		$user_name = $this->session -> userdata('name');
		$user_id = $this->session -> userdata('id');
		$res = $this->home_model->realtor_details($user_id);
		
		$data= array();
		$data['user_name'] = $user_name;
		$data['menu_type'] = "add_new";
		$data['approval'] = $res->approval;

		$this->load->view('add_home', $data);
	}


	public function registration()
	{		
		$response = array();
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width']  = '20000';
		$config['max_height']  = '30000';
		
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('licence_image')) {

			print_r( $this->upload->display_errors());
			$response['status'] = false;
			$response['message'] = "error";
		}
		else
		{
			$filedata = $this->upload->data();
			$filename = $filedata['file_name'];
			
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['company'] = $this->input->post('company');
			$data['password'] = md5($this->input->post('password'));
			$data['licence_image'] = $filename;	
			if($this->user_model->is_realter_exist($this->input->post('email'))){
				$response['status'] = false;
				$response['message'] = "email id already exist";
			}else{
				$res = $this->user_model->registration_submit($data);
				if($res){
					$response['status'] = true;
					$response['message'] = "Registration successful";
				}else{
					$response['status'] = false;
					$response['message'] = "Registration failed";
				}
			}
		}	
		echo (json_encode($response));
	}

	public function login()
	{		
		$data['email'] = $this->input->post('email');	
		$data['password'] = md5($this->input->post('password'));

		$res = $this->user_model->login($data);
		
		if(count($res)>0){
			$response['status'] = true;
			$response['value'] = $res;

			$this -> session -> set_userdata('id', $res->id);
			$this -> session -> set_userdata('name', $res->name);
			$this -> session -> set_userdata('email', $res->email);

		}else{
			$response['status'] = false;
		}
		echo (json_encode($response));
	}

	public function logout(){
		$this -> session -> set_userdata('id', '');
		$this -> session -> set_userdata('name', '');
		$this -> session -> set_userdata('email', '');

		redirect('/user');
	}

	public function update_profile()
	{		
		$response = array();
		$config['upload_path'] = './uploads';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '2000';
		$config['max_width']  = '20000';
		$config['max_height']  = '30000';
		
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('image')) {

			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['company'] = $this->input->post('company');
			$data['id'] = $this->session -> userdata('id');
			$res = $this->user_model->update_user_without_image($data);

			print_r( $this->upload->display_errors());
			$response['status'] = true;
			$response['message'] = "success";
			echo json_encode($response);
		}
		else
		{
			$filedata = $this->upload->data();
			$filename = $filedata['file_name'];
			
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['company'] = $this->input->post('company');
			$data['image'] = $filename;
			$data['id'] = $this->session -> userdata('id');
			$res = $this->user_model->update_user_with_image($data);

			$response['status'] = true;
			$response['message'] = "success";
			echo json_encode($response);

			
		}	
		// echo (json_encode($response));
	}


}

?>