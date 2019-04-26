<?php
	/**
	 * 
	 */
	class Model_tubes extends CI_Model
	{
		
		function login ()
		{
			$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    		$password = $this->input->post('password');
    		echo $username." ".$password;
			$this->db->where('Username', $username);
        	$this->db->where('Password', $password);
        	$this->db->from('user');
        	$query = $this->db->get();
        	$row = $query->row_array();
        	return $row;
		}
	}
?>