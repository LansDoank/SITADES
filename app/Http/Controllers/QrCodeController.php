<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\SubDistrict;
use App\Models\Village;
use App\Models\VisitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QrCodeController extends Controller
{
    public function add() {
        return view('qrcode.add',['username'=>Auth::user()->username,'provinces' => Province::all()]);
    }

    public function create(Request $request) {
        $qr_code = new VisitType();
        $village_name = Village::where('code',$request->village)->first()->name;
        $slug = Str::slug(Village::where('code',$request->village)->first()->name);
        $qr_code->qr_code = "127.0.0.1:8000/form/$request->village/$slug";
        $qr_code->name = $village_name;
        $qr_code->slug = Str::slug($village_name);
        $qr_code->province_code = $request->province;
        $qr_code->district_code = $request->district;
        $qr_code->sub_district_code = $request->sub_district;
        $qr_code->village_code = $request->village;
        $qr_code->save();
        
        return redirect()->route('admin.qrCode')->with('success','Data Berhasil Ditambahkan');
    }

    public function edit($id) {
        $visit = VisitType::find($id);
        return view('qrCode.edit',['title' => 'Edit Kode Qr','username' => Auth::user()->username,'oldVisit' => $visit,'provinces' => Province::all()]);
    }

    public function update(Request $request) {
        $visit = VisitType::find($request->id);
        $slug = Str::slug(Village::where('code',$request->village)->first()->name);
        $visit->update([
            'qr_code' => "sitamu.com/form/$request->village/$slug",
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'province_code' => $request->province,
            'district_code' => $request->district,
            'sub_district_code' => $request->sub_district,
            'village_code' => $request->village
        ]);

        return redirect()->route('admin.qrCode');
    }

    public function delete($id){
        $visit = VisitType::find($id)->delete();
        return redirect()->route('admin.qrCode')->with('success','Data Berhasil Dihapus');
    }
}
