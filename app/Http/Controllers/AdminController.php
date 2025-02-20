<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Visitor;
use App\Models\User;
use App\Models\VisitType;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login', ['title' => 'Login Form']);
    }

    public function dashboard()
    {

        $guestDaily = Visitor::whereDate('check_in', today())->count();
        $guestWeekly = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ])->count();
        $guestMonthly = Visitor::whereMonth('check_in', today()->month)
            ->whereYear('check_in', today()->year)
            ->count();
        $guestYearly = Visitor::whereYear('check_in', today()->year)->count();

        $studi_banding = Visitor::where('objective','Studi Banding')->get()->count();
        $cari_informasi = Visitor::where('objective','Cari Informasi')->get()->count();
        $lainnya = Visitor::where('objective','Lainnya')->get()->count();
        $pembinaan = Visitor::where('objective','Pembinaan')->get()->count();
        $koordinasi = Visitor::where('objective','Koordinasi')->get()->count();

        return view(
            'admin.dashboard',
            [
                'username' => Auth::user()->username,
                'guestDaily' => $guestDaily,
                'guestWeekly' => $guestWeekly,
                'guestMonthly' => $guestMonthly,
                'guestYearly' => $guestYearly,
                'studi_banding' => $studi_banding,
                'cari_informasi' => $cari_informasi,
                'pembinaan' => $pembinaan,
                'koordinasi' => $koordinasi,
                'lainnya' => $lainnya,
            ]
        );
    }

    public function visitors()
    {
        return view(
            'admin.visitor',
            ['visitors' => Visitor::all(), 'username' => Auth::user()->username]
        );
    }

    public function receptionist()
    {
        $receptionists = User::where('role_id', '2')->get();
        return view('admin.receptionists', ['username' => Auth::user()->username, 'receptionists' => $receptionists]);
    }

    public function masterData(){
        return view('admin.masterdata',['username' => Auth::user()->username,'visitors' => Visitor::all()]);
    }

    public function qrCode()
    {
        return view('admin.qrCode', ['username' => Auth::user()->username,'visitTypes' => VisitType::all()]);
    }
}
