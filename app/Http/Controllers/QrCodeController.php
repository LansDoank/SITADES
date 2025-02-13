<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\SubDistrict;
use App\Models\Village;
use App\Models\VisitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use QRcode;

class QrCodeController extends Controller
{
    public function add() {
        return view('qrcode.add',['username'=>Auth::user()->username,'provinces' => Province::all(),'districts' => District::all(),'sub_districts' => SubDistrict::all(),'villages' => Village::all()]);
    }

    public function create(Request $request) {

        function generateQr($url){
            QRcode::png($url);
        }

        generateQr("https://sitamu.com/form/$request->village");

        // $visitType = new VisitType();
        // $visitType->qr_code = 
        // $visitType->name = $request->name;
        // $visitType->province_code = $request->province;
        // $visitType->district_code = $request->district;
        // $visitType->sub_district_code = $request->sub_district;
        // $visitType->village_code = $request->village;

        // return redirect()->route('admin.qr_code');
    }
}
