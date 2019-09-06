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
			'address' => $data['address'],
			'municipality_name' => $data['municipality_name'],
			'municipality_paper' => $data['municipality_paper'],
			'street_no' => $data['street_no'],
			'street_name' => $data['street_name']
		);
		$flag = $this->db->insert('homes',$home_data);
		return $flag==1?true:flase;
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
		$this -> db -> where('address', $data['address']);

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