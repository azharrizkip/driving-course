<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function Home(){
        $page = "Beranda";
        return view('home', compact("page"));
    }

    public function AboutUs(){
        $page = "Tentang Kami";
        return view('aboutus', compact("page"));
    }

    public function OurInstructors(){
        $page = "Instruktur Kami";
        return view('ourinstructors', compact("page"));
    }

    public function Services(){
        $page = "Layanan Kursus";
        return view('services', compact("page"));
    }

    public function Gallery(){
        $page = "Galeri";
        return view('gallery', compact("page"));
    }

    public function ContactUs(){
        $page = "Kontak Kami";
        return view('contact', compact("page"));
    }

}
