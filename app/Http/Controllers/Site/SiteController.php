<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use App\Models\User;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function HomePage(){
        return view('Site/Page/HomePage');
    }

    public function SearchPage()
    {
        $keyword = \request('keyword');
        $start_time = microtime(true);
        $Company = CompanyModel::join('users as creator_by', 'creator_by.id', '=', 'company.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'company.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'company.*'
            )
            ->where('company.status', '=',1)
            ->where('company_title', 'like','%'.$keyword.'%')
            ->orderBy('company_id', 'asc')->paginate(8);
        $end_time = microtime(true);
        $Time = ($end_time - $start_time);
        $CompanyCount = $Company->count();
        return view('Site/Page/SearchPage', compact('Company','CompanyCount','Time'));
    }

}
