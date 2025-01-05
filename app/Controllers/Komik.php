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
            'komik' => $this->komikTable->getKomik($slug)
        ];

        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Judul komik ' . $slug . ' tidak ditemukan.');
        }

        return view('komik/detail', $data);
    }

    public function create(){
        $data = ['title' => 'Tambah Data Komik'];
        return view('komik/create', $data);
    }
    public function tes(){
        $data = ['title' => 'tes Data Komik'];
        return view('komik/tes', $data);
    }

    public function save(){
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikTable->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'sampul' => $this->request->getVar('sampul'),
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/komik');
    }

}
