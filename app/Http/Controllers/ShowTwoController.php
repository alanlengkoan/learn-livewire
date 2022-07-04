<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class ShowTwoController extends Controller
{
    public function index()
    {
        return view('content/show_two');
    }
}