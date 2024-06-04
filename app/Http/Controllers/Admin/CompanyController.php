<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    public function CompanyIndex(){
        $Company = CompanyModel::join('users as creator_by', 'creator_by.id', '=', 'company.creator')
            ->leftJoin('users as modifier_by', 'modifier_by.id', '=', 'company.modifier')
            ->select(
                'creator_by.name as creator_by',
                'modifier_by.name as modifier_by',
                'company.*'
            )
            ->orderBy('company_id','asc')->paginate(8);

        return view('Admin/Pages/Company/CompanyIndex',compact('Company'));
    }

    public function CompanyCreate(){
        return view('Admin/Pages/Company/CompanyCreate');
    }

    public function CompanyEntry(Request $request){
        $validation = $request->validate([
            'company_title' => 'required|unique:company',
        ]);

        $data =  array();
        $data['company_title'] = $request->company_title;
        $data['company_desc'] = $request->company_desc;
        $data['company_link'] = $request->company_link;
        $data['company_number'] = $request->company_number;
        $data['company_email'] = $request->company_email;

        $data['status'] = 1;
        $data['creator'] = 1;
        $data['modifier'] = 1;
        $data['created_date'] = date("Y-m-d h:i:s");
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = CompanyModel::insert($data);


        if ($res){
            return back()->with('success_message','Company Add Successfully!');
        }else{
            return back()->with('error_message','Company Add Fail!');
        }

    }

    public function CompanyEdit($id){
        $Company = CompanyModel::where('company_id',$id)->first();
        return view('Admin/Pages/Company/CompanyUpdate',compact('Company'));
    }

    public function CompanyUpdate(Request $request, $id){

        $request->validate([
            'company_title' => 'required|unique:company,company_title,'. $id .',company_id'
        ]);

        $data =  array();
        $data['company_title'] = $request->company_title;
        $data['company_desc'] = $request->company_desc;
        $data['company_link'] = $request->company_link;
        $data['company_number'] = $request->company_number;
        $data['company_email'] = $request->company_email;

        $data['status'] = $request->status;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = CompanyModel::where('company_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','Company Update Successfully!');
        }else{
            return back()->with('error_message','Company Update Fail!');
        }

    }
}
