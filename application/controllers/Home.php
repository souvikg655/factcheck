<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		//$this->ci->load->library('Session'); 
		//$this->ci =& get_instance(); 
		//$this->ci->load->library('Session');


		$this->load->helper(['form', 'url']);
		$this->load->library('upload');
		$this->load->model('home_model');
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
		$res = $this->home_model->fetch_home_data(1);

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
		// $foo = $this -> session -> userdata();
		// print_r($foo);

		// $this -> session -> set_userdata("value1", "value0000");
		// $foo = $this -> session -> userdata();
		// print_r($foo);
		// die();

		$res = $this->home_model->fetch_home_data(2); //2 is realter id
		$this->load->view('dashboard',  array('data' => $res));
	}

	public function profile()
	{
		$res = $this->home_model->realtor_details(69); //2 is realter id
		$this->load->view('profile',  array('data' => $res));
	}


}
?>