<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Controller {


	public function registration_submit($data)
	{
		print_r($data);
	}

	public function login_submit($data)
	{
		//print_r($data);
		echo "Test";
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('name', $data['name'] AND 'password', $data['password']);
		//$this -> db -> where('password', $data['password']);
		$this -> db -> limit(1);


		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$result_data = $query->result(); 
		}else{
			echo "Error";
		}


	}
}


?>