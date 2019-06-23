<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('MyModel');
	}
	public function index()
	{
		echo "hii";
		// $this->load->view('welcome_message');
	}
	public function login()
	{
		// echo "Login Page";
		$this->load->view('loginpage');
		if ($this->input->post('Login')) {
			$Res = $this->MyModel->LoginData($this->input->post('UserName'),$this->input->post('Password'));
			// echo "<pre>";
			// print_r($Res);
			return redirect('MyController/home');
			// echo "<pre>";
			// print_r($Res);
		}
	}
	public function registration(){
		// echo "Login Page";
		$AllCountries = $this->db->get('country')->result();
		// echo "<pre>";
		// print_r($AllCountries);
		$this->load->view('registpage');
		if ($this->input->post('Registration')) {
			$FormArray = $this->input->post();
			array_pop($FormArray);
			$this->db->insert('user', $FormArray); 
		}
	}
	public function home(){
		// echo "hello user";
		$Data['AllUsers'] = $this->db->get('user')->result();
		// echo "<pre>";
		// print_r($AllUsers);
		$this->load->view('user',$Data);
	}
	public function EditUser(){
		$uid = $this->uri->segment(3);
		$Data['AllCities'] = $this->db->get('city')->result();
		$Data['AllUsers'] = $this->db->where('user_id',$uid)->get('user')->result();
		// echo "<pre>";
		$this->load->view('edituser',$Data);

		$FormArray = $this->input->post();
			array_pop($FormArray);
			$this->db->update('user', $FormArray,array('user_id'=>$uid)); 
			return redirect('MyController/home');
		// print_r($Data);
	}
	public function DeleteUser(){
		$uid = $this->uri->segment(3);
		$this->db->delete('user', array('user_id'=>$uid)); 
		return redirect('MyController/home');
		// print_r($Data);
	}

}
