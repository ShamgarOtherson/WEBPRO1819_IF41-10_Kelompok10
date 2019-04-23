<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('registero');
	}
		public function regist()
	{
				//validation form
		$this->form_validation->set_rules('name','Fullname','required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('uname','Username','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('email','Email','required|trim|matches[password-re]');
		$this->form_validation->set_rules('password','Password','required|trim|matches[password]');
		$title = $this->input->post('register');
		if($this->form_validation->run()== false){
			$this->load->view('header1');
			$this->load->view('registrationView');
			//$this->load->view('footer');
		}
		else {
		//insert data to array
			$data = [
				'username' => $this->input->post('username'),
				'nama' => $this->input->post('fullname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'alamat' => '',
				'noHp' => ''
							
			];

		$this->load->view('registero', array('title' => $title));
	}
		
}