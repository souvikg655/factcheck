<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('search_model');
	}

	public function view_page()
	{
		$this->load->view('search');
	}

	public function fetch_all_countrys(){
		$countryArray = [];

		$res = $this->search_model->search_country();

		for ($i = 0; $i <count($res); $i++) {
			$countryArray[] = (object) [
				"label" => ucfirst($res[$i]->country),
				"value" => $res[$i]->country
			];
		}
		echo (json_encode($countryArray));
	}

	public function fetch_all_citys(){
		$city_list = [];
		$country = $this->input->post('country');
		$res = $this->search_model->fetch_city_by_country($country);
		
		for ($i = 0; $i <count($res); $i++) {
			$city_list[] = (object) [
				"label" => ucfirst($res[$i]->city),
				"value" => $res[$i]->city
			];
		}
		echo (json_encode($city_list));
	}

	public function fetch_all_propertys(){
		$propertyArray = array();
		$result = $this->search_model->propertys();

		$propertyArray[] = (object) [
			"label" => "",
			"value" => "0"
		];

		for($i=0; $i<count($result); $i++){
			$propertyArray[] = (object) [
				"label" => ucfirst($result[$i]->name),
				"value" =>$result[$i]->name
			];
		}
		echo (json_encode($propertyArray));
	}

	public function fetch_all_areas(){
		$areaArray = array();
		$result = $this->search_model->fetch_areas();

		$areaArray[] = (object) [
			"label" => "",
			"value" => "0"
		];

		for($i=0; $i<count($result); $i++){
			$areaArray[] = (object) [
				"label" => ucfirst($result[$i]->value),
				"value" =>$result[$i]->value
			];
		}
	echo (json_encode($areaArray));
	}

	public function search_homes(){
		$value = $this->input->post('searchDataArray');

		$value = json_decode($value);

		if(!$value->municipality){
			
		}else{
			$result = $this->search_model->search_home_in_model($value);

			$streetNameObject = array();
			$streetNameObject[] = (object) [
				"label" => "",
				"value" => "0"
			];
			for($i=0; $i<count($result); $i++){
				$streetNameObject[] = (object) [
					"label" => ucfirst($result[$i]->street_name),
					"value" =>$result[$i]->street_name
				];
				
			}

			$postalCodeObject = array();
			$postalCodeObject[] = (object) [
				"label" => "",
				"value" => "0"
			];
			for($i=0; $i<count($result); $i++){
				$postalCodeObject[] = (object) [
					"label" => ucfirst($result[$i]->postal),
					"value" =>$result[$i]->postal
				];
				
			}


			$searchData['value'] = $result;
			$searchData['count'] = count($result);
			$searchData['street_name'] = $streetNameObject;
			$searchData['postal_code'] = $postalCodeObject;
		}

		echo (json_encode($searchData));
	}

}