<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
}
