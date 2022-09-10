<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $company = $user->company()->first();
        $data['company'] = $company;
        return view('pages.company', $data);
    }

    public function save(Request $request)
    {
        $data = $request->only(['name', 'description', 'website']);
        $user = Auth::user();
        $company = $user->company()->firstOrNew();
        $company->name = $data['name'];
        $company->description = $data['description'];
        $company->logo = '';
        $company->website = $data['website'];
        $company->save();
        return redirect(route('company'));
    }

    /*
    public function save(Request $request)
    {
        $user = Auth::user();
        $data = $request->only(['name', 'description', 'website']);
        $data['logo'] = '';
        $company = new Company($data);
        $user->company()->save($company);
        return redirect(route('company'));
    }
    */
}
