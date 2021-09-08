<?php

namespace App\Http\Controllers;

use App\Adress;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $adress = Adress::all();
        // @dd($adress)
        // echo json_encode($adress);
        return view('dashboard', compact('adress'));
    }
}
