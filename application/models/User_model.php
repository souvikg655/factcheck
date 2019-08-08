<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function registration_submit($data)
	{	
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('email', $data['email']);
		$query = $this -> db -> get();

		$user_data = array(
			'name' => $data['name'] ,
			'email' => $data['email'],
			'company' => $data['company'],
			'password' => $data['password'],
			'image' => $data['licence_image']
		);
		$flag = $this->db->insert('users',$user_data);
		return $flag==1?true:flase;
	}


	public function is_realter_exist($email){
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('email', $email);
		$query = $this -> db -> get();
		$rows = $query -> num_rows();
		return $rows>0?true:false;
	}

	public function login($data)
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('email', $data['email']);
		$this -> db -> where('password', $data['password']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			$result_data = $query->result();
			$response['status'] = True;
			$response['value'] = $result_data;
			return $response;
		}else{
			$response['status'] = False;
			return $response;
		}
	}

}


?>