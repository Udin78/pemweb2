<?php namespace App\Controllers;
     
class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }

    public function biodata()
    {
        echo "nama= Muhammad Syarifuddin<br>";
        echo "nim= 4122032<br>";
        echo "alamat= Murong Santren<br>";
    }
}