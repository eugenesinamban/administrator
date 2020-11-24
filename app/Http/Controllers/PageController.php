<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $types = Type::all();
        return view('pages.home.dashboard', compact('types'));
    }
}
