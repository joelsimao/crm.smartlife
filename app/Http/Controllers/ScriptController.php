<?php

namespace App\Http\Controllers;

use App\Agency;
use App\Operator;
use App\Supervisor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScriptController extends Controller
{
    public function age_calculator(Request $request){
        $date_of_birth = new Carbon($request->date_of_birth);
        $age = $date_of_birth->diffInYears(Carbon::now());
        return response()->json(compact('age'));
    }

    public function get_supervisor(Request $request){
        $operator = Operator::findOrFail($request->operator_id);
        $supervisor = Supervisor::findOrFail($operator->supervisor_id);
        return response()->json($supervisor->toArray());
    }

    public function tour_calculate(Request $request)
    {
        $entry_hour = new Carbon($request->entry_hour);
        $leave_hour = new Carbon($request->leave_hour);
        $tour = $leave_hour->diff($entry_hour)->format('%Hh%Im');
        return response()->json(compact('tour'));
    }

}
