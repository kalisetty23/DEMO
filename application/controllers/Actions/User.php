<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{
     function _construct()
    {
		parent::_construct();

		$this->load->model('M_User', 'user');
		
    }

	public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->user->login($username, $password);
        if (count($login))
        {
            $sess_data = array(
                'uid' => $login['id'],
                'username' => $login['username'],
                'firstname' => $login['firstname'],
                'middlename' => $login['middlename'],
                'lastname' => $login['middlename'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($sess_data);
            
            $isLogin = 1;
        }
        else
        {
            $isLogin = 0;
        }

        $data = array('isLogin' => $isLogin);
        header('Content-Type: application/json');
        echo json_encode($data);
    } 

    public function register()
    {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$firstname = $this->input->post('username');
		$middlename = $this->input->post('middlename');
		$lastname = $this->input->post('lastname');
		
		if ($this->user->register($username, $password, $firstname, $middlename, $lastname))
		{
			$isRegistered = 1;
		}
			else
			{
				$isRegistered = 0;
			}
			$data = array(
				'isRegistered' => $isRegistered
			);

			header('Content-Type: application/json');
			echo json_encode($data);
    }
	public function logout()
    {
        $sess_data = array(
            'uid' => '',
            'username' => '',
            'firstname' => '',
            'middlename' => '',
            'lastname' => '',
            'logged_in' => FALSE
        );
        $this->session->unset_userdata($sess_data);
        $this->session->sess_destroy();
        redirect('user/login');
    }

}

