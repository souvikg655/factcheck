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
		$search_array = array();

		

		// if($search_array->country){

		// }

		//print_r($search_array->municipality);
		
	}

}
?>