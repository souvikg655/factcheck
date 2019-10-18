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

	public function search_homes(){
		$value = $this->input->post('searchDataArray');
		$value = json_decode($value);

		$res = $this->search_model->search_home_in_model($value);
	}

}