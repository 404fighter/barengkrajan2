<?php

class Beranda extends CI_Controller {

    public function index() 
    {
        $data['judul'] = 'Desa Barengkrajan | Beranda';
        
        $this->load->view('template/header', $data);
        $this->load->view('beranda/index');
        $this->load->view('template/footer');
    }

}