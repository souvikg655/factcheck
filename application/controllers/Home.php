<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');

		$this->load->helper(['form', 'url']);
		$this->load->library('upload');
		$this->load->model('home_model');
		$this->load->model('user_model');
	}

	public function insert_home()
	{	
		$response = array();
		$config['upload_path'] = './municipality_papers';
		$config['allowed_types'] = 'pdf';
		$config['max_size']	= '2000';
		$config['max_width']  = '20000';
		$config['max_height']  = '30000';
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('municipality_paper')) {
			$response['status'] = false;
			$response['message'] = "error";
		}else{
			$filedata = $this->upload->data();
			$filename = $filedata['file_name'];

			$data['realtor_id'] = $this->input->post('realtor_id');
			$data['title'] = $this->input->post('title');
			$data['bedroom'] = $this->input->post('bedroom');
			$data['bathroom'] = $this->input->post('bathroom');
			$data['property_type'] = $this->input->post('property_type');
			$data['house_age'] = $this->input->post('house_age');
			$data['area'] = $this->input->post('area');
			$data['beside_road'] = $this->input->post('beside_road');
			$data['country'] = $this->input->post('country');
			$data['province'] = $this->input->post('province');
			$data['postal'] = $this->input->post('postal');
			$data['house_no'] = $this->input->post('house_no');
			$data['address'] = $this->input->post('address');
			$data['municipality_paper'] = $filename;
			$data['status'] = $this->input->post('status');

			$res = $this->home_model->home_add($data);
			
			if($res){
				$response['status'] = true;
				$response['message'] = "Home add successful";
			}else{
				$response['status'] = false;
				$response['message'] = "Sorry! Not add home";
			}

		}
		print_r($response);
	}

	public function fetch_home()
	{	
		$user_id = $this->session -> userdata('id');
		$res = $this->home_model->fetch_home_data($user_id);

		if($res['status']){
			$response['status'] = true;
			$response['value'] = $res['value'];
		}else{
			$response['status'] = false;
			$response['message'] = "No home exist";
		}

		return $response;
	}

	public function dashboard()
	{	
		$user_name = $this->session -> userdata('name');
		$user_id = $this->session -> userdata('id');
		$res = $this->user_model->fetch_user($user_id);


		if($res->approval == 'ACCEPTED'){
			$res1 = $this->home_model->fetch_home_data($user_id);

			$data= array();
			$data['data'] = $res1;
			$data['user_name'] = $user_name;
			$data['menu_type'] = "list";
			$data['approval'] = $res->approval;

			$this->load->view('dashboard', $data);
		
	}else{
		$this->profile();
	}
}



	public function profile()
	{

		$user_name = $this->session -> userdata('name');
		$user_id = $this->session -> userdata('id');

		$res = $this->home_model->realtor_details($user_id);

		$data= array();
		$data['data'] = $res;
		$data['user_name'] = $user_name;
		$data['menu_type'] = "profile";
		$data['approval'] = $res->approval;

		
		$this->load->view('profile',  $data);
	}


}
?>