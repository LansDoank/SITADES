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

        $guestDaily = count(Visitor::where('check_in', today())->get());
        $guestWeekly = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek(),
            Carbon::now()->endOfWeek()
        ])->count();
        $guestMonthly = Visitor::whereMonth('check_in', today()->month)
            ->whereYear('check_in', today()->year)
            ->count();
        $guestYearly = Visitor::whereYear('check_in', today()->year)->count();


        $monday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(0),
            Carbon::now()->startOfWeek()->addDay(1)
        ])->count();

        $tuesday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(1),
            Carbon::now()->startOfWeek()->addDay(2)
        ])->count();

        $wednesday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(2),
            Carbon::now()->startOfWeek()->addDay(3)
        ])->count();

        $thursday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(3),
            Carbon::now()->startOfWeek()->addDay(4)
        ])->count();

        $friday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(4),
            Carbon::now()->startOfWeek()->addDay(5)
        ])->count();

        $saturday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(5),
            Carbon::now()->startOfWeek()->addDay(6)
        ])->count();

        $sunday = Visitor::whereBetween('check_in', [
            Carbon::now()->startOfWeek()->addDay(6),
            Carbon::now()->startOfWeek()->addDay(7)
        ])->count();

        return view(
            'admin.dashboard',
            [
                'username' => Auth::user()->username,
                'guestDaily' => $guestDaily,
                'guestWeekly' => $guestWeekly,
                'guestMonthly' => $guestMonthly,
                'guestYearly' => $guestYearly,
                'monday' => $monday,
                'tuesday' => $tuesday,
                'wednesday' => $wednesday,
                'thursday' => $thursday,
                'friday' => $friday,
                'saturday' => $saturday,
                'sunday' => $sunday,
            ]
        );
    }

    public function visitors()
    {
        return view(
            'admin.visitor',
            ['users' => Visitor::all(), 'username' => Auth::user()->username]
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
