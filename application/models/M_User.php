<?php

if(!defined('BASEPATH')) exit('No direct script access allowed!');

class M_User extends CI_Model {

	function _construct()
	{
		parent:: _construct();
	}


	public function login($username, $password)
    {
        $password = md5($password);
        $data = array();

        $this->db->where(array(
            'username' => $username,
            'password' => $password
        ));
        $this->db->limit(1);
        $q = $this->db->get('users');
        if ($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }
        $q->free_result();
        return $data;
    }
	public function register($username, $password, $firstname, $middlename, $lastname)
	{
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'firstname' => $firstname,
			'middlename' => $middlename,
			'lastname' => $lastname
 
		);

		return $this->db->insert('users', $data);

		
	}	
}
