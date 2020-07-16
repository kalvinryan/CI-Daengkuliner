<?php

class Kuliner extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kuliner Tradisional';
        $this->load->view('templates/header',$data);
        $this->load->view('kuliner/index');
        $this->load->view('templates/footer');
    }
}