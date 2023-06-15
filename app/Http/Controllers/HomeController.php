<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index(){
        $comic = Comic::All();
        return view('pages.home', compact('comic'));
    }
}
