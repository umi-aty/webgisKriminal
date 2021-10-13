<?php

class Webgis extends CI_Controller{
    public function index()
	{
        $data = array(
            'title' => 'WebGIS Kriminalitas Kabupaten Bekasi',
            'isi'   => 'v_webgis'
        );
        $this->load->view('front-end/v_wrapper',$data,false); 
    }
   
}
