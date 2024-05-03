<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index(){
        $items = Schedule::all();
        $params = [
            'items' => $items
        ];
        return view('schedules.index',$params);
    }
}
