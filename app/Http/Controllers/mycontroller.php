<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a = "Fallah";
    	return "Nama Saya Adalah ".$a;
    }

    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }

    //passing data variable to view
    public function percobaan3()
    {
    	$a = "Fallah";
    	return view('latihan.saya', compact('a'));
    }
    public function percobaan4()
    {
    	$f = "Fallah";
    	$s = "XI RPL 3";
    	$sa = "SMK ASSALAAM";
    	return view('latihan.nama', compact('f','s','sa'));
    }
    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view('latihan.seleksi', compact('a','b','c'));
    }
    public function percobaan6()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur'];
    	return view('latihan.buah', compact('buah'));
    }
    public function param($pilih)
    {
        $campur = ['buah'=>['Mangga','Jeruk','Apel','Anggur','cerry'],
                    'hewan'=>['kucing','anjing','cacing','ayam','tikus'],
                    'jenis'=>['anggora','persia'],
                    'komputer'=>['Asus','Acer','Hp','Lenovo','Mac']];
        $baru=$campur[$pilih];
    	return view('latihan.latihan', compact('baru','pilih'));
    }
     
}
