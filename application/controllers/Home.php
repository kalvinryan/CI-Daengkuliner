<?php

class Home extends CI_Controller {
	public function index()
	{
          $data['title'] = 'Daeng Kuliner';
          $this->load->view('templates/header',$data);
          $this->load->view('home/index');
    }
    
    public function kuliner()
    {
        $data['title'] = 'Kuliner Tradisional';
        $this->load->view('templates/header',$data);
        $this->load->view('home/kuliner');
    }

    public function maps()
    {
        $data['title'] = 'Pedagang Kuliner';
        $this->load->view('templates/header',$data);
        $this->load->view('home/maps');
        $this->load->view('templates/footer');
    }
    public function kota()
    {
        $data['title'] = 'Kota';
        $this->load->view('templates/header',$data);
        $this->load->view('home/kota');
    }
    public function recipes()
    {
        $data['title'] = 'Recipes';
        $this->load->view('templates/header',$data);
        $this->load->view('home/recipes');
        $this->load->view('templates/footer');
    }

}
