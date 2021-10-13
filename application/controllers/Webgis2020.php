<?php

class Webgis2020 extends CI_Controller{
    public function index()
	{
        $data = array(
            'title' => 'WebGIS Kriminalitas Kabupaten Bekasi',
            'isi'   => 'v_webgis2020'
        );
        $this->load->view('front-end/v_wrapper',$data,false); 
    }
   
}
