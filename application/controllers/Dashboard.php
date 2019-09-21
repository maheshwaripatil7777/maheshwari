<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    function index()
    {
        $this->load->library('session');
        $email=$this->session->userdata('username');
        
        $this->load->model('Mymodel');
        $data=$this->Mymodel->userdata($email);

        $info=array(
            'data'=>$data
        );
        $this->load->view('dash',$info);

    }
}