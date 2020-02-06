<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartCnotroller extends Controller
{
    public function index(){
        $data=['name'=>'James'];
        // nasze dane dajemy do tablicy naprzykład 
    
             return view('subviws.hellodata',$data);
            //  przekazujemy je do widoku, w widoku dostajemy sie do zmiennej{{name}}
        
    }
}
