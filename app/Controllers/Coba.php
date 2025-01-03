<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        echo "coba index";
    }
    public function about($nama = 'Admin'){
        echo "Hallo nama saya $nama";
    }
}
