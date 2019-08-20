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

	public function fetch_user($id){
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('id', $id);
		$data = $this -> db -> get();
		return $data -> row();
	}

	public function login($data)
	{
		$this -> db -> select('*');
		$this -> db -> from('users');
		$this -> db -> where('email', $data['email']);
		$this -> db -> where('password', $data['password']);
		$this -> db -> limit(1);
		$query = $this -> db -> get();

		return $query->row();
	}

	public function update_user_without_image($data)
	{
		$user_id = $data['id'];
		$value = [
		 	'name' => $data['name'],
		 	'email' => $data['email'],
		 	'company' => $data['company'],
		 	'approval' => "PENDING",
		 	'reject_status' => ""
		];

		$this->db->where('id', $user_id);
		$this->db->update('users', $value);
	return true;
	}

	public function update_user_with_image($data)
	{
		$user_id = $data['id'];
		$value = [
		 	'name' => $data['name'],
		 	'email' => $data['email'],
		 	'company' => $data['company'],
		 	'image' => $data['image'],
		 	'approval' => "PENDING",
		 	'reject_status' => ""
		];

		$this->db->where('id', $user_id);
		$this->db->update('users', $value);
	return true;
	}


	}



?>