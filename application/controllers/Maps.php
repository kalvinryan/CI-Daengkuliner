<?php

class Maps extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pedagang Kuliner';
        $this->load->view('templates/header',$data);
        $this->load->view('maps/index');
        $this->load->view('templates/footer');
    }
}