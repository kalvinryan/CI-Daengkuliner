<?php

class Home extends CI_Controller {
	public function index()
	{
          $data['title'] = 'Daeng Kuliner';
          $this->load->view('templates/header',$data);
          $this->load->view('home/index');
          $this->load->view('templates/footer');
    }
    
    public function kuliner()
    {
        $data['title'] = 'Kuliner Tradisional';
        $this->load->view('templates/header',$data);
        $this->load->view('home/kuliner');
        $this->load->view('templates/footer');
    }

    public function maps()
    {
        $data['title'] = 'Pedagang Kuliner';
        $this->load->view('templates/header',$data);
        $this->load->view('home/maps');
        $this->load->view('templates/footer');
    }
}
