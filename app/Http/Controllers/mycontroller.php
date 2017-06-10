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
    public function param($data, $data2 = null)
    {
        $array = array('binatang' =>['kucing'=>['anggora','persia'],
                                     'hamster'=>['hamtaro','hamtari'],
                                     'kelinci'=>['anggora','persia']],
                        'buah' =>['mangga'=>['harumanis','marijan'],
                                    'alpukat'=>['hijau','hitam'],
                                    'apel'=>['fuji','hijau']],
                        'komputer' =>['asus'=>['roug','x4413'],
                                        'acer'=>['predator','aspire'],
                                        'hp'=>['probook','pavilion']]
                                    );
        if ($data) {
            $query = (array_keys($array[$data]));
        }
        if ($data2) {
            $query = ($array[$data][$data2]);
        }
    	return view('latihan.latihan', compact('query','data','data2'));
    }
     
}
