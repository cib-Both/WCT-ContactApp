<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Contact;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
{
    $companyCount = Company::count();
    $contactCount = Contact::count();
    $userCount = User::count();

    return view('dashboard', compact('companyCount', 'contactCount', 'userCount'));
}
}
