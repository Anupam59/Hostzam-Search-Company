<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function DashboardIndex(){
        $CompanyActive = CompanyModel::where('company.status', '=',1)->get()->count();
        $CompanyInactive = CompanyModel::where('company.status', '!=',1)->get()->count();
        return view('Admin.Pages.Dashboard.DashboardIndex',compact('CompanyActive','CompanyInactive'));
    }
}
