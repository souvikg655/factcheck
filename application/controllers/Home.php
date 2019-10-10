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

	public function upload_home_image(){
		$response1 = array();
		$config1['upload_path'] = './home_images';
		$config1['allowed_types'] = 'jpg|png|jpeg';
		$config1['max_size']	= '2000';
		$config1['max_width']  = '20000';
		$config1['max_height']  = '30000';

		$this->upload->initialize($config1);
		if($this->upload->do_upload('home_image')){
			$filedata1 = $this->upload->data();
			$filename1 = $filedata1['file_name'];
		}
	return $filename1;
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
			$data['realtor_id'] = $this->session -> userdata('id');
			$data['title'] = $this->input->post('title');
			$data['bedroom'] = $this->input->post('bedroom');
			$data['bathroom'] = $this->input->post('bathroom');
			$data['property_type'] = $this->input->post('property_type');
			$data['house_age'] = $this->input->post('house_age');
			$data['area'] = $this->input->post('area');
			$data['beside_road'] = $this->input->post('beside_road');
			$data['country'] = $this->input->post('country');
			$data['province'] = $this->input->post('province');
			$data['city'] = $this->input->post('city');
			$data['postal'] = $this->input->post('postal');
			$data['house_no'] = $this->input->post('house_no');
			$data['municipality_name'] = $this->input->post('municipality_name');
			$data['street_no'] = $this->input->post('street_no');
			$data['street_name'] = $this->input->post('street_name');
			$data['availability'] = $this->input->post('availability');
			$data['sale_lease'] = $this->input->post('sale_lease');
			$data['street_abbr'] = $this->input->post('street_abbr');			
			$data['municipality_paper'] = $filename;
			$data['status'] = $this->input->post('status');

			$home_image = $this->input->post('home_image');

			

			//$data['upload_home_image'] = $this->upload_home_image();


			print_r($home_image);

			// $res = $this->home_model->home_add($data);
			// if($res){
			// 	$response['status'] = true;
			// 	$response['message'] = "Home add successful";
			// }else{
			// 	$response['status'] = false;
			// 	$response['message'] = "Sorry! Not add home";
			// }
		}
	//echo (json_encode($response));
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
		if($this->session -> userdata('id') != ''){
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
				$data['points'] = $res->points;
				$this->load->view('dashboard', $data);
			}else{
				$this->profile();
			}
		}else{
			redirect(base_url());
		}
	}

	public function profile()
	{
		if($this->session -> userdata('id') != ''){
			$user_name = $this->session -> userdata('name');
			$user_id = $this->session -> userdata('id');
			$res = $this->home_model->realtor_details($user_id);
			$data= array();
			$data['data'] = $res;
			$data['user_name'] = $user_name;
			$data['menu_type'] = "profile";
			$data['approval'] = $res->approval;
			$data['points'] = $res->points;
			$this->load->view('profile',  $data);
		}else{
			redirect(base_url());
		}
	}

	public function is_exist_postal_code()
	{	
		$postal_code = $this->input->post('postal_code');
		$response = $this->home_model->postal_code_exist($postal_code);
		$postal_code_list = array();
		for($i=0; $i<count($response); $i++){
			array_push($postal_code_list,$response[$i]->postal);
		}
		echo (json_encode($postal_code_list));
	}

	public function search_home()
	{	
		$data['province'] = $this->input->post('province');
		$data['city'] = $this->input->post('city');
		$data['postal_code'] = $this->input->post('postal_code');
		$data['house_no'] = $this->input->post('house_no');	
		$data['municipality_name'] = $this->input->post('municipality_name');	
		$data['street_name'] = $this->input->post('street_name');	
		$data['street_no'] = $this->input->post('street_no');	
		$res = $this->home_model->search_home($data);
		echo (json_encode($res));
	}
}

?>