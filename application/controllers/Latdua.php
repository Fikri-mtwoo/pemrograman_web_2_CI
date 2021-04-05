<?php

class Latdua extends CI_Controller{

    public function hitung(){
        $larik = array(1,2,3,4,5);
        $data['larik'] = $larik;
        $this->load->view('v_hasil',$data);
    }
}