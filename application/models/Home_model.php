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
			'postal' => $data['postal'],
			'house_no' => $data['house_no'],
			'address' => $data['address'],
			'municipality_paper' => $data['municipality_paper']
		);
		$flag = $this->db->insert('homes',$home_data);
		return $flag==1?true:flase;
	}

	public function fetch_home_data($realtor_id)
	{
		$this -> db -> select('*');
		$this -> db -> from('homes');
		$this -> db -> where('realtor_id', $realtor_id);
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
	
}

?>