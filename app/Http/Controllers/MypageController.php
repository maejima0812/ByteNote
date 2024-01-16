<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Calculate;
use Illuminate\Http\Request;
use Illuminate\View\View;
use DateTime;

class MypageController extends Controller
{
    public function mypage()
    {
        return view('Mypage.mypage');
    }
    public function form()
    {
        return view('Mypage.calculate');
    }
    
public function calculate(Request $request)
{
    $rules = [
        'calculate.date' => 'required|date',
        'calculate.start_time' => 'required',
        'calculate.end_time' => 'required',
        'calculate.hourly_rate' => 'required|numeric',
        'calculate.late_night_rate' => 'required|numeric',
    ];


    $request->validate($rules);

    $calculate = new Calculate();
    $calculate->date = $request->input('calculate.date');
    $calculate->start_time = $request->input('calculate.start_time');
    $calculate->end_date = $request->input('calculate.end_date');
    $calculate->end_time = $request->input('calculate.end_time');
    $calculate->hourly_rate = $request->input('calculate.hourly_rate');
    $calculate->late_night_rate = $request->input('calculate.late_night_rate');
    $calculate->user_id = Auth::id(); 
    $existingRecord = Calculate::where('date', $calculate->date)
        ->where('user_id', $calculate->user_id)
        ->first();

    if (!$existingRecord) {
 
        $calculate->save();

        $totalEarnings = $calculate->calculateTotalEarnings();

        $records = Calculate::all();

        return view('Mypage.record', compact('totalEarnings', 'records'));
    }

    return redirect()->route('record');
}
public function record()
{
    $records = Calculate::all();
    return view('Mypage.record',compact('records'));
}
}