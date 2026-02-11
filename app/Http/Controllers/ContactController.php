<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactme(){
        return view('contact', ['contact'=> '@onsracode']);
    }
}
