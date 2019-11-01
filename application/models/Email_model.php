<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function get_images_by_id($home_id){


		$this -> db -> select('image');
		$this -> db -> from('home_images');
		$this -> db -> where('home_id', $home_id);
		$this -> db -> where('status', '1');

		$query = $this -> db -> get();
		$image_list = $query->result();

	return $image_list;
	}


}
?>