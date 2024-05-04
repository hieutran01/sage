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

    public function favorites(){
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
    public function ajaxScheduleFavorite($id,$type){
        $favorites = session()->get('favorites',[]);
        $favorites['match'] = !empty($favorites['match']) ? $favorites['match'] : [];
        $favorites['sclass'] = !empty($favorites['sclass']) ? $favorites['sclass'] : [];
        if( $type == 'match' ){
            if( isset($favorites['match'][$id]) ){
                unset($favorites['match'][$id]);
            }else{
                $favorites['match'][$id] = (int)$id;
            }
        }
        if( $type == 'sclass' ){
            $schedules = Schedule::where('sclass_id',$id)->get()->pluck('schedule_id')->toArray();
            if( isset($favorites['sclass'][$id]) ){
                unset($favorites['sclass'][$id]);
                foreach( $schedules as $schedule_id ){
                    unset($favorites['match'][$schedule_id]);
                }
            }else{
                $favorites['sclass'][$id] = $id;
                foreach( $schedules as $schedule_id ){
                    $favorites['match'][$schedule_id] = $schedule_id;
                }
            }
        }
        // sort($favorites['match']);
        // sort($favorites['sclass']);

        session()->put('favorites',$favorites);

        return response()->json([
            'success' => true,
            'match_ids' => $favorites['match'],
            'sclass_ids' => $favorites['sclass'],
        ]);
    }
}
