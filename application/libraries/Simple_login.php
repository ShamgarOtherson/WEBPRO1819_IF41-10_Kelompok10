 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Simple_login {
 
     var $CI = NULL;
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('user',array('username'=>$Username,'password' => $Password));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             $this->CI->db->select('*');
             $this->CI->db->from('user');
             $this->CI->db->where('user.Username',$Username);
             $row = $this->CI->db->get();
             $admin     = $row->row();

             $status = $admin->status;
 
             //set session user
             $this->CI->session->set_userdata('username', $Username);
             $this->CI->session->set_userdata('id_login', uniqid(rand()));

             //redirect ke halaman dashboard
             redirect('Welcome');
         }else{
             redirect('Welcome');
         }
          return false;
      }
     

     public function cek_login() {
 
         //cek session username
         if($this->CI->session->userdata('username') == '') {

         }else{
             return true;
         }
     }
 

     public function logout() {
         $this->CI->session->unset_userdata('username');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         redirect('Welcome');
     }
 }