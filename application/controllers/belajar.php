<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class belajar extends CI_Controller{
    public function index()
    {
        $nilai1 = 4;
        $nilai2 = 6;

        $tambah = $nilai1 + $nilai2;

        echo "<br>";
        echo "OPERATOR <br>";
        echo "Hasil dari string $nilai1 + $nilai2 = ",$tambah;
        
        {
            $nim = 19220010 ;
            $nama = "Febrisumaryadi" ;
            $kelas = "19.3a.04" ;
            $prodi = "Sistem informasi" ;
            echo "NIM = $nim <br>" ;
            echo "NAMA = $nama <br>" ;
            echo "KELAS = $kelas <br>" ;
            echo "PRODI = $prodi <br>" ;
    
    }
    }
    public function biodata()
    {

            $data=array(
            'no_barang'=>"112444525",
            'nama_barang'=>"penghapus",
            'qty'=> 90
            );
        $this -> load -> view('viewbelajar',$data);
    }
}
    

    


    
