<?php
	/**
	 * 
	 */
	class Model_tubes extends CI_Model
	{
		public function login($username,$password){
  			$user = $this->db->get_where('user',['email'=>$username])->row_array();
  			if($user == null){
   				$user = $this->db->get_where('user',['username'=>$username])->row_array();
  		}
  		if($user && $user['password']==$password){
   				return $user;
  		}
	}
}?>