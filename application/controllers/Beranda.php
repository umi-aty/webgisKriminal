<?php

class Beranda extends CI_Controller{
    public function index()
	{
        $data = array(
            'title' => 'Selamat Datang di WebGIS Kriminalitas Kabupaten Bekasi',
            'isi'   => 'v_beranda'
        );
        $this->load->view('front-end/v_wrapper',$data,false); 
    }
   
}
