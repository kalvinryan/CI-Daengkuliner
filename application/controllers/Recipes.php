<?php

class Recipes extends CI_Controller {
	public function index()
	{
          $data['title'] = 'Recipes';
          $this->load->view('templates/header',$data);
          $this->load->view('recipes/index');
          $this->load->view('templates/footer');
    }
}