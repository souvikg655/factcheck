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
		
		$query = $this -> db -> get();
		$result = $query->result();
		
	return $result;
	}

}
?>