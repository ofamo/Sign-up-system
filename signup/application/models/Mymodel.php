<?php 
class Mymodel extends CI_Model{
	public function signup($username,$email,$password){
		$query = $this->db->query('INSERT INTO `sign_up`(`username`, `email`, `password`) VALUES ( ? , ? , ?)' ,array($username,$email,$password));
	}
        
}