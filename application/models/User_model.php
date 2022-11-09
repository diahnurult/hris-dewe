<?php
/**
* 
*/
class User_model extends CI_Model
{
	
	public function prosesLogin($user,$pass)
	{
		$query = "SELECT * FROM user WHERE username = '". $username ."' AND password '". $pass ."' ";
		return $this->db->query($query);
	}

	public function getLogin($username)
	{
		$q = "SELECT * FROM user WHERE username = '". $username ."'";
		$query = $this->db->query($q);

		return $query->row();
	}
}