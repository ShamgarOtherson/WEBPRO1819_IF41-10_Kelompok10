<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Model_tubes');
	}
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
		$this->form_validation->set_rules('Username','Username','required|trim');
  		$this->form_validation->set_rules('Password','Password','required|trim');
  		if($this->form_validation->run() == false){
   			$this->load->view('landing');
   		}
  		else{
   		//validation sukses
   			$username = $this->input->post('Username');
   			$password = $this->input->post('Password');
   			$user = $this->Web_model->login($username,$password);
   		//jika username/email sama dengan password
   		if($user){
    		$this->session->set_userdata($user);
    	redirect("Welcome");
   		}
   		//jika username/password salah
   		else{
    	$this->load->view('landing');
   		}
 	 }
		$this->load->view('LoginExplore');
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
}
