<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoModel;
use App\Models\Taxes;

class SettingController extends Controller
{

    public function store_logo(Request $req)
    {
        $lo = LogoModel::all();

        if($lo == " "){
            $logos = new LogoModel();
            if($req->hasfile('logo'))
            {
                $logo = $req->file('logo');
                $logo1 = $logo->getClientOriginalName();
                $logo->move(public_path()."/logo/", $logo1);
                $logos->logo = $logo1;
                $logos->save();
            }
            return redirect()->back()->with('alert','Data insert successfully');
        }else{
            $lo = LogoModel::all();
            foreach ($lo as $value) {
                 $id = $value->id;     
            }       
            $logos = LogoModel::where('id',$id)->first();
            if($req->hasfile('logo'))
            {
                $logo = $req->file('logo');
                $logo1 = $logo->getClientOriginalName();
                $logo->move(public_path()."/logo/", $logo1);
                $logos->logo = $logo1;
                $logos->update();
            } 
            return redirect()->back()->with('alert','Data updated successfully');
        }
    }
    public function Taxes(Request $request)
    {
        $tax = Taxes::all();
        return view('taxes',compact('tax'));
    }
    public function Store_Taxes(Request $request)
    {
        $saveTax = $request->input('saveTax');
        $updateTax = $request->input('update');
        if($saveTax == 'saveTax'){
            $tax = new Taxes();
            $tax->name = $request->input('name');
            $tax->CGST = $request->input('CGST');
            $tax->SGST = $request->input('SGST');
            $tax->IGST = $request->input('IGST');
            $tax->GST = $request->input('GST');
            $tax->incl_rate = $request->input('incl_rate');
            $tax->save();
            return redirect()->back()->with('success','Data Saved');
        }else if($updateTax == 'updateTax'){
            $id = $request->input('id');
            $tax = Taxes::where('id',$id)->first();
            $tax->name = $request->input('name');
            $tax->CGST = $request->input('CGST');
            $tax->SGST = $request->input('SGST');
            $tax->IGST = $request->input('IGST');
            $tax->GST = $request->input('GST');
            $tax->incl_rate = $request->input('incl_rate');
            $tax->update();
            return redirect()->back()->with('success','Data Updated');
        }
    }
    public function editData(Request $request, $id)
    {
        $editTax = Taxes::where('id',$id)->get();
        return response()->json($editTax);
    }

    public function all_Supplier(Request $request)
    {
        return view('all_suppliers');
    }
}
