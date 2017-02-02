<?php

namespace App\Http\Controllers;

use App\Pledge;

use Illuminate\Http\Request;

class PledgeController extends Controller
{
    public function index()
    {
        $pledge = Pledge::getDefault();
        return view('pledge', compact($pledge));
    }
}
