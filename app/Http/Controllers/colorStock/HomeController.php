<?php

namespace App\Http\Controllers\colorStock;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('stock-color.content-view.content-home.view');
    }
}
