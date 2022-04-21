<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{


    public function index()
    {
        $this->load->view('daftar');
    }



    public function home($a)
    {
        echo $a;
    }

    public function notFound()
    {
        echo "Halaman Tidak Ditemukan";
    }
}
