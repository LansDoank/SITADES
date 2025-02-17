<?php

namespace App\Http\Controllers;

use App\Models\VisitType;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\District;
use App\Models\Province;
use App\Models\SubDistrict;
use App\Models\Village;


class VisitorController extends Controller
{

    public function form()
    {
        return view('user.form', ['title' => 'Formulir Bertamu', 'visitTypes' => VisitType::all()]);
    }

    public function show($code)
    {
        // $id = $code;
        $code = str_split($code);
        $provinceCode = $code[0] . $code[1];
        $districtCode = $code[0] . $code[1] . $code[2] . $code[3];
        $subDistrictCode = $code[0] . $code[1] . $code[2] . $code[3] . $code[4] . $code[5];
        $villageCode = "$code[0]$code[1]$code[2]$code[3]$code[4]$code[5]$code[6]$code[7]$code[8]$code[9]";

        return view('user.form', [
            // 'id' => $id,
            'title' => 'Visitor Form',
            'visit' => VisitType::where('village_code', $villageCode)->first(),
            ]);
    }

    public function addVisitor(Request $request)
    {
        // $request->validate([
        //     'fullname' => 'required',
        //     'email' => 'required',
        //     'telephone' => 'required',
        //     'address' => 'required',
        //     'check_in' => 'required',
        //     'check_out' => 'required',
        //     'purpose' => 'required',
        //     'person' => 'required',
        //     'room' => 'required',
        //     'status' => 'required'
        // ]);

        $newVisitor = new Visitor();
        $newVisitor->fullname = $request->fullname;
        $newVisitor->institution = $request->institution;
        $newVisitor->address = $request->province . " " . $request->district . " " . $request->sub_district .  " " . $request->village;
        $newVisitor->check_in = $request->check_in;
        $newVisitor->check_out = $request->check_out;
        $newVisitor->telephone = $request->telephone;
        $newVisitor->visitor_photo = $request->file('visitor_photo')->store('user_photo');
        $newVisitor->visit_type_id = $request->visit_type;
        $newVisitor->objective = $request->objective;
        $newVisitor->i_n_i = $request->i_n_i;
        $newVisitor->province_code = $request->province_code;
        $newVisitor->district_code = $request->district_code;
        $newVisitor->subdistrict_code = $request->sub_district_code;
        $newVisitor->village_code = $request->village_code;
        $newVisitor->save();


        return redirect()->route('user.index')->with('visitor_success', 'Data berhasil ditambahkan');
    }

    public function add(){
        return view('visitor.add',['title' => 'Visitor Form','username' => Auth::user()->username,'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function edit($id) {
        return view('visitor.edit',['title' => 'Edit Data Tamu','username' => Auth::user()->username,'oldVisit' => Visitor::find($id),'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function update(Request $request){
        $visitor = Visitor::find($request->id);

        $visitor->update([
            'fullname' => $request->fullname,
            'institution' => $request->institution,
            'address' => $request->province . " " . $request->district . " " . $request->sub_district .  " " . $request->village,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'telephone' => $request->telephone,
            'visit_type_id' => $request->visit_type,
            'objective' => $request->objective,
            'i_n_i' => $request->i_n_i,
            'province_code' => $request->province_code,
            'district_code' => $request->district_code,
            'subdistrict_code' => $request->sub_district_code,
            'village_code' => $request->village_code,
        ]);

        if ($request->hasFile('visitor_photo')) {
            $visitor->update([
                'visitor_photo' => $request->file('visitor_photo')->store('user_photo'),
            ]);
        }

        return redirect()->route('admin.visitors')->with('visitor_success','Data Berhasil Diperbaharui');
    }

    public function delete($id)
    {
        Visitor::find($id)->delete();
        return redirect()->route('admin.visitors')->with('visitor_delete', 'Data berhasil dihapus');
    }
}
