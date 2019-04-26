<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('landing');
	}
	public function loadexplore()
	{
		$this->load->view('explore');
	}
	public function loadLogin()
	{
		$this->load->view('Login');
	}
	public function loadLogEx()
	{
		$data = $this->Model_tubes->login();
		if ($data != null){
			$this->session->set_userdata($data);
			$this->load->view('LoginExplore');
		}else{
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    		$password = $this->input->post('password');
    		echo $username." ".$password;
			echo "Error";
		}
		
	}
	public function Loadprofile()
	{
		$this->load->view('Myprofile');
	}
	public function LoadUpgrade()
	{
		$this->load->view('Upgrade');
	}
	public function LoadSetting()
	{
		$this->load->view('Setting');
	}
}?>
