<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function home_add($data)
	{	
		$home_data = array(
			'realtor_id' => $data['realtor_id'] ,
			'title' => $data['title'],
			'bedroom' => $data['bedroom'],
			'bathroom' => $data['bathroom'],
			'type' => $data['property_type'],
			'age' => $data['house_age'],
			'area' => $data['area'],
			'beside_road' => $data['beside_road'],
			'country' => $data['country'],
			'province' => $data['province'],
			'city' => $data['city'],
			'postal' => $data['postal'],
			'house_no' => $data['house_no'],
			'municipality_name' => $data['municipality_name'],
			'municipality_paper' => $data['municipality_paper'],
			'street_no' => $data['street_no'],
			'street_name' => $data['street_name'],
			'availability' => $data['availability'],
			'sale_lease' => $data['sale_lease'],
			'street_abbr' => $data['street_abbr']
		);
		$flag = $this->db->insert('homes',$home_data);

		$this -> db -> select('id');
		$this -> db -> from('homes');
		$this -> db -> where('realtor_id', $data['realtor_id']);
		$this->db->order_by('id', 'DESC');
		$this->db->limit(1);
		$query = $this -> db -> get();
		$last_id = $query->result();
		
		$home_image = array(
			'realtor_id' => $data['realtor_id'],
			'home_id' => $last_id[0]->id,
			'image' => $data['upload_home_image']
		);
		$flag1 = $this->db->insert('home_images',$home_image);

		if($flag1 == 1 && $flag == 1){
			return true;
		}else{
			return flase;
		}
	}

	public function fetch_home_data($realtor_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('homes');
		$this -> db -> where('realtor_id', $realtor_id);
		$this->db->order_by("id", "desc");
		$query = $this -> db -> get();

		return $query->result();
	}

	public function fetch_proparty_type(){
		$this -> db -> select('name');
		$this -> db -> from('property');
		$this->db->order_by("id");
		$this -> db -> where('status', '1');
		$query = $this -> db -> get();

	return $query->result();
	}

	public function fetch_area(){
		$this -> db -> select('value');
		$this -> db -> from('area');
		$this->db->order_by("id");
		$this -> db -> where('status', '1');
		$query = $this -> db -> get();

	return $query->result();
	}

	public function mail_details($home_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('homes');
		$this -> db -> where('id', $home_id);
		$query = $this -> db -> get();

		return $query->result();
	}

	public function realtor_details($realtor_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('id', $realtor_id);
		$query = $this -> db -> get();

		return $query->row();
	}

	public function province()
	{
		$this->db->distinct();
		$this -> db -> select('province');
		$this -> db -> from('mst_province');
		$query = $this -> db -> get();

		return $query->result();
	}

	public function city($province)
	{
		$this -> db -> select('city');
		$this -> db -> from('mst_province');
		$this -> db -> where('province', $province);
		$query = $this -> db -> get();
		
		return $query->result();
	}

	public function search_home($data)
	{
		$this -> db -> select('*');
		$this -> db -> from('homes');
		$this -> db -> where('province', $data['province']);
		$this -> db -> where('city', $data['city']);
		$this -> db -> where('postal', $data['postal_code']);
		$this -> db -> where('house_no', $data['house_no']);
		$this -> db -> where('municipality_name', $data['municipality_name']);
		$this -> db -> where('street_name', $data['street_name']);
		$this -> db -> where('street_no', $data['street_no']);

		$query = $this -> db -> get();
		$res = $query->result();

		return $res;
	}

	public function postal_code_exist($data)
	{
		if($data != ''){
			$this->db->distinct();
			$this->db->select('*');
			$this->db->from('homes');
			$this->db->like('postal', $data, 'after');

			$query = $this->db->get();
			$res = $query->result();
		}else{
			$res = [];
		}
		
	return $res;
	}
	
}

?>