<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = new User();
        //dd($user->company());
        return view('pages.home');
    }

    public function store(Request $request)
    {
        print_r($request->all());
    }
}
