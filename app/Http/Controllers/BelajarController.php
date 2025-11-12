<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //oop : object oriented programming
    // properties
    // public $name;
    // private $name;
    // static $name;

    public function index()
    {
        return "Halo saya sedang belajar laravel";
    }


    public function create()
    {
        return view('create');
    }

    public function tambah()
    {
        return view('tambah');
    }
    public function kurang()
    {
        return view('kurang');
    }

    public function kali()
    {
        return view('kali');
    }

    public function bagi()
    {
        return view('bagi');
    }

    public function tambahAction(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }
}
