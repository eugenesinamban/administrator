<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $types = Type::all();
        $users = User::all();
        return view('admin.pages.home.dashboard', compact('types', 'users'));
    }
}
