<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']    
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Help',
            //'tes' => ['satu', 'dua', 'tiga']    
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Unipdu Jaya Jaya Jaya',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Unipdu jaya jaya',
                    'kota' => 'jombang'
                ],
                
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Unipdu sukses',
                    'kota' => 'kota santri'
                ],
            ] 
        ];
        return view('page/contact', $data);
    }
}
