<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home | Zanma Web"
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            "title" => "About | Zanma Web"
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            "title" => "Contact | Zanma Web",
            "alamat" => [
                [
                    "tipe" => "rumah",
                    "alamat" => "jl tirtotejo",
                    "kota" => "Solo"
                ],
                [
                    "tipe" => "kantor",
                    "alamat" => "jl sutan syahrir",
                    "kota" => "Jakarta"
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
