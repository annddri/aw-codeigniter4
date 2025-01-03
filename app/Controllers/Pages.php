<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/index', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About',
            'tes' => ['sat', 'dua', 'tiga']
        ];
        return view('/pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'tes2' => [
                [
                    "tipe" => "rumah",
                    "alamat" => "wangisagara",
                    "kota" => "Bandung"
                ],
                [
                    "tipe" => "kantor",
                    "alamat" => "neglasari",
                    "kota" => "majalaya"
                ]
            ]
        ];
        return view('/pages/contact', $data);
    }
}
