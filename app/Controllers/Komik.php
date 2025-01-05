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
        $komik = $this->komikTable->findAll();
        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];
        return view('komik/index', $data);
    }

}
