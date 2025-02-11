<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\VisitType;

class UserController extends Controller
{
    public function index () {
        return view('user.index',['title' => 'Sitamu']);
    }

    public function form() {
        return view('user.form',['title' => 'Formulir Bertamu','visitTypes' => VisitType::all()]);
    }

    public function addVisitor(Request $request) {
        // $request->validate([
        //     'fullname' => 'required',
        //     'email' => 'required',
        //     'phone' => 'required',
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
        $newVisitor->address = $request->province . $request->district . $request->sub_district . $request->village;
        $newVisitor->check_in = $request->check_in;
        $newVisitor->check_out = $request->check_out;
        $newVisitor->telephone = $request->telephone;
        $newVisitor->visitor_photo = $request->file('visitor_photo')->store('user_photo');
        $newVisitor->visit_type_id = $request->visit_type;
        $newVisitor->objective = $request->objective;
        $newVisitor->province_code = $request->province_code;
        $newVisitor->district_code = $request->district_code;
        $newVisitor->subdistrict_code = $request->sub_district_code;
        $newVisitor->village_code = $request->village_code;
        $newVisitor->save();


        return redirect()->route('user.index')->with('success','Data berhasil ditambahkan');
    }
}
