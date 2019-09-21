<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function ui()
    {
        $this->load->helper('url');
        $this->load->view('register');
    }
    function enter_data()
    {
        $this->load->helper("url");
        $fname=$this->input->post('fname');
        $lname=$this->input->post('lname');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');
        $pass=$this->input->post('pass');
        $cpass=$this->input->post('cpass');

        $data=array(
            'f_name'=>$fname,
            'l_name'=>$lname,
            'email'=>$email,
            'number'=>$phone,
            'password'=>$pass,
            'account_created'=>date('Y-m-d H:i:s'),
            'last_login'=>date('Y-m-d H:i:s')
        );

        $this->load->model('Mymodel');
        $this->Mymodel->register($data);
        redirect('/login/ui');

    }
}