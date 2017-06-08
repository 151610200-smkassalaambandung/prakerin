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
}
