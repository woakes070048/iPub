<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PubsController extends Controller
{
    public function pubs(){
        return view('pubs');
    }
}
