<?php

class Soal extends CI_Controller{

    public function tampil(){
        $data['sikap'] = array('Jujur','Amanah','Adil','Rendah hati');
        $this->load->view('tampil',$data);
    }
    public function tampilduadimensi(){
        $data['kitab'] = array(
            array('Pengarang'=>'Imam Adz Dzahabi','Judul'=>'Siyar Alaam An – Nubalaa','Harga'=>2000000),
            array('Pengarang'=>'Ibnul Qayyim','Judul'=>'Zaadul Maad','Harga'=>40000),
            array('Pengarang'=>'Ibnul Jauzy','Judul'=>'Talbis Iblis','Harga'=>85000));
        $this->load->view('tampilduadimensi',$data);
    }
}