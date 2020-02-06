<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeCnotroller extends Controller
{
    public function about(){
        // wyswietlamy widok ktory jest resources\views\services.blade.php
        return view('about');
    }
    public function services(){
        
        $data=[
            
            'Service 1',
            'Service 2',
            'Service 3',
            'Service 4',
        ];
        // wyswietlamy widok ktory jest resources\views\services.blade.php
        return view('services',  compact('data'));
        // funkcaj compact jest potrzebna aby odebrac dane w vidoku
    }
}
