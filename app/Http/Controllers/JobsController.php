<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $data = [
            'jobs' => [
                ['title' => 'Desenvolvedor PHP Júnior'],
                ['title' => 'Desenvolvedor PHP Pleno Home Office']
            ]
        ];
        return view('pages.jobs', $data);
    }
}
