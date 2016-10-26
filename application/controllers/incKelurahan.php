<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class incKelurahan extends CI_Controller
{
 
    public function __construct() {
        parent::__construct();
        $this->load->model('mod_User'); 
    }
 
    public function get_all() {
        $kode = strtolower($_GET['term']);  
        $query = $this->mod_User->tampilKelurahan($kode); 
 
        $kota       =  array();
        foreach ($query as $d) {
            $kota[]     = array(
                'label' => $d->NamaKelurahan,
                'idKota' => $d->idKelurahan, 
                'Radius' => $d->Radius
            );
        }
        echo json_encode($kota);      //data array yang telah kota deklarasikan dibawa menggunakan json
    }
}
 