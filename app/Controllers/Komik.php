<?php

namespace App\Controllers;

Use App\Models\KomikModel;
class Komik extends BaseController
{
    protected $komikTable;
    public function __construct(){
        $this->komikTable = new KomikModel();
    }
    public function index()
    {
        // $komik = $this->komikTable->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $this->komikTable->getKomik()
        ];
        return view('komik/index', $data);
    }

    public function detail($slug){
        $data = [
            'title' => 'Detail Komik',
            'komik' => $komik = $this->komikTable->getKomik($slug)
        ];
        return view('komik/detail', $data);
    }

}
