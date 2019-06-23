<?php

class MyModel extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}
	function LoginData($uname,$pass){
		return $Data = $this->db->select('*')->from('user')
	                ->where('password', $pass)
	        ->group_start()
	            ->or_where('username', $uname)
	            ->or_where('email', $uname)
	            ->or_where('mobile', $uname)
	        ->group_end()
	->get()->result();
	// print_r($this->db->last_query());
	}
}


?>