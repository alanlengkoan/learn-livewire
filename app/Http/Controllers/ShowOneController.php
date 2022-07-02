<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class ShowOneController extends Controller
{
    public function index()
    {
        return view('content/show_one');
    }
}