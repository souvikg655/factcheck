<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function search_country(){
		$this -> db -> select('country');
		$this -> db ->distinct('country');
		$this -> db -> from('homes');
		$query = $this -> db -> get();
		$country_list = $query->result();

	return $country_list;
	}

	public function fetch_city_by_country($country){
		$this -> db -> select('city');
		$this -> db ->distinct('city');
		$this -> db -> from('mst_province');
		$query = $this -> db -> get();
		$city_list = $query->result();

	return $city_list;
	}

	public function propertys(){
		$this -> db -> select('name');
		$this -> db -> from('property');
		$this -> db -> where('status', "1");
		$query = $this -> db -> get();
		$property_list = $query->result();

	return $property_list;
	}

	public function fetch_areas(){
		$this -> db -> select('value');
		$this -> db -> from('area');
		$this -> db -> where('status', "1");
		$query = $this -> db -> get();
		$area_list = $query->result();

	return $area_list;
	}

	public function search_home_in_model($search_array){
		
		$this -> db -> select('*');
		$this -> db -> from('homes');
		$this -> db -> where('country', $search_array->country);

		if(count($search_array->municipality) == 1){
			$this -> db -> where('city', $search_array->municipality[0]);
		}else{
			$this -> db -> where('city', $search_array->municipality[0]);
			for($i=1; $i<count($search_array->municipality); $i++){
				$this -> db -> or_where('city', $search_array->municipality[$i]);
			}
		}

		if(array_key_exists("street_form", $search_array) && array_key_exists("street_to", $search_array)){
				$this->db->where('street_no >=', $search_array->street_form);
				$this->db->where('street_no <=', $search_array->street_to);
		}

		if(array_key_exists("street_name", $search_array)){
			$this -> db -> or_where('street_name', $search_array->street_name);
		}

		if(array_key_exists("postal_code", $search_array)){
			$this -> db -> or_where('postal', $search_array->postal_code);
		}

		if(array_key_exists("property", $search_array)){
			$this -> db -> or_where('type', $search_array->property);
		}

		if(array_key_exists("area", $search_array)){
			$this -> db -> or_where('area', $search_array->property);
		}

		
		$query = $this -> db -> get();
		$result = $query->result();
		
	return $result;
	}

}
?>