<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index($type) {
        $page = $type;
        // if not in list, redirect to dashboard
        return view('pages.type.list', compact('type'));
    }
}
