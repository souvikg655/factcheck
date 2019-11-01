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
			$province_list = $this->home_model->province();
			$data= array();
			$data['province'] = $province_list;
			$this->load->view('index', $data);
		}
	}
	public function about(){
		$this->load->view('about');
	}
	public function contact_us(){
		$this->load->view('contact');
	}
	public function terms_condition(){
		$this->load->view('terms');
	}
	public function privacy_policy(){
		$this->load->view('privacy');
	}
	

	public function add_home()
	{	
		if($this->session -> userdata('id') != ''){
			$user_name = $this->session -> userdata('name');
			$user_id = $this->session -> userdata('id');
			$res = $this->home_model->realtor_details($user_id);
			$province_list = $this->home_model->province();
			$proparty = $this->home_model->fetch_proparty_type();
			$area = $this->home_model->fetch_area();


			$data= array();
			$data['user_name'] = $user_name;
			$data['menu_type'] = "add_new";
			$data['approval'] = $res->approval;
			$data['points'] = $res->points;
			$data['province'] = $province_list;
			$data['proparty'] = $proparty;
			$data['area'] = $area;

			$this->load->view('add_home', $data);
		}else{
			redirect(base_url());
		}
	}

	public function get_city()
	{
		$province = $this->input->post('province');
		$city_list = $this->home_model->city($province);
		echo (json_encode($city_list));
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
		}else{
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
		if(!empty($res)){
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
		redirect(base_url());
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
		}else{
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
		}
		echo json_encode($response);	
	}

	public function contact_form(){
		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['query'] = $this->input->post('query');
		$res = $this->user_model->contact($data);
		if($res == 1){
			$response['status'] = true;
			$response['message'] = "Contact submit successful";
		}else{
			$response['status'] = false;
			$response['message'] = "Contact submit failed";
		}
		echo json_encode($response);
	}
}
?>