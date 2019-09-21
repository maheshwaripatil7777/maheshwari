<?php

class Mymodel extends CI_Model 
{
    function register($data)
    {
        $this->load->database();
        $this->db->insert('users',$data);
    }
    function getUsers($d)
    {
        $this->load->database();
        $query=$this->db->get_where('users',array($d));
        $data=$query->num_rows();
        return $data;
    }
    function userdata($email)
    {
        $this->load->database();
        $query=$this->db->get_where('users',array($email));
        $data=$query->result_array();
        return $data;        
    }
    function set_ll($email)
    {

        $this->load->database();
        $this->db->set('last_login',date('Y-m-d H:i:s'));
        $this->db->where('email',$email);
        $this->db->update('users');
    }
}