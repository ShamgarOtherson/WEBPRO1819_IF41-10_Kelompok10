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
}?>
