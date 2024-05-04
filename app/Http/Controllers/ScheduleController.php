<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Sclass;

class ScheduleController extends Controller
{
    public function index(){
        $items = Schedule::getAll();
        $sclasses = Sclass::getAll();
        $number_live = Schedule::where('match_state',1)->count();
        $params = [
            'items_arr' => $items,
            'sclasses' => $sclasses,
            'number_live' => $number_live,
        ];
        return view('schedules.index',$params);
    }

    public function ajaxSchedules($type = ''){
        $items = Schedule::getAll($type);
        $sclasses = Sclass::getAll();
        $params = [
            'items_arr' => $items,
            'sclasses' => $sclasses,
        ];
        $returnHTML = view('schedules.ajaxSchedules',$params)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
