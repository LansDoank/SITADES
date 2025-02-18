<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\User;
use App\Models\SubDistrict;
use App\Models\Village;
use App\Models\VisitType;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function login() {
        return view( 'receptionist.login',['title' => 'Login Form']);
    }

    public function addReceptionist() {
        return view( 'receptionist.add',['title' => 'Add Receptionist','username' => Auth::user()->username,'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function add(Request $request) {
        $receptionist = new User();
        $receptionist->name = $request->name;
        $receptionist->username = $request->username;
        $receptionist->password = $request->password;
        $receptionist->role_id = '2';
        $receptionist->province_code = $request->province;
        $receptionist->district_code = $request->district;
        $receptionist->sub_district_code = $request->sub_district;
        $receptionist->village_code = $request->village;
        $receptionist->photo = $request->file('receptionist_photo')->store('receptionist_photo');
        $receptionist->save();

        $village = new VisitType();
        $village->qr_code = '1';
        $villageName = VisitType::where('village_code',$request->village)->first();
        dd($villageName);
        $village->name = $villageName->name;
        $village->slug  = Str::slug($villageName->name);
        $village->province_code = $request->province;
        $village->district_code = $request->district;
        $village->sub_district_code = $request->sub_district;
        $village->village_code = $request->village;

        return redirect()->route('admin.receptionists')->with('success','Receptionist added successfully');
    }

    public function show($id) {
        $receptionist = User::find($id);
        return view('receptionist.edit',['title' => 'Edit Receptionist','username' => Auth::user()->username,'oldReceptionist' => $receptionist,'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function update(Request $request){
        $receptionist = User::find($request->id);
        $receptionist->update([
            'name' => $request->name,
            'username' => $request->username,
            'province_code' => $request->province,
            'district_code' => $request->district,
            'sub_district_code' => $request->sub_district,
            'village_code' => $request->village,
        ]);

        if ($request->file('image')) {
            if($request->oldPhoto){
                Storage::delete($request->oldPhoto);
            }
            $receptionist->update([
                'photo' => $request->file('image')->store('receptionist_photo'),
            ]);
        }

        // $receptionist->update([
        //     'photo' => 'p'
        // ]);

        return redirect()->route('admin.receptionists')->with('success','Data Berhasil Diubah!');
    }

    public function delete($id) {
        User::find($id)->delete();
        return redirect()->route('admin.receptionists')->with('success','Receptionist deleted successfully');
    }
}
