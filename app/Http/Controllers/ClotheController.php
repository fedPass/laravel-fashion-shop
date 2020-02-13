<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothe;

class ClotheController extends Controller
{
    public function index() {
        $vestiti = Clothe::all();
        dd($vestiti);
        return view('home');
    }
}
