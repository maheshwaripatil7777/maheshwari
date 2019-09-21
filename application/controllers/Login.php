<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function ui()
    {
        $this->load->helper('url');
        $this->load->view('login');
    }
    function check()
    {
        $this->load->helper('url');
        $this->load->library('session');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');

        $info=array(
            'email'=>$email,
            'pass'=>$pass
        );

        $this->load->model('Mymodel');
        $data=$this->Mymodel->getUsers($pass);

        if($data>0)
        {
            $this->Mymodel->set_ll($email);
            $this->session->set_userdata('username', $email);
            redirect('/dashboard');
        }
    
    }
}