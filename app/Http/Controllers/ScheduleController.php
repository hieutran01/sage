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
        $number_live = Schedule::where('match_state',Schedule::IS_LIVE)->count();
        $params = [
            'items_arr' => $items,
            'sclasses' => $sclasses,
            'number_live' => $number_live,
            'match_ids' => [],
        ];
        return view('schedules.index',$params);
    }

    public function favorites(){
        $favorites = session()->get('favorites',[]);
        $match_ids = !empty($favorites['match']) ? $favorites['match'] : [];

        $number_live = 0;
        $items = $sclasses = [];
        if( count($match_ids) ){
            $items = Schedule::getAll('',$match_ids);
            $sclasses = Sclass::getAll();
            $number_live = Schedule::where('is_live',Schedule::IS_LIVE);
            if( count($match_ids) ){
                $number_live->whereIn('schedule_id',$match_ids);
            }
            $number_live = $number_live->count();
        }
        
        $params = [
            'items_arr' => $items,
            'sclasses' => $sclasses,
            'number_live' => $number_live,
            'match_ids' => $match_ids,
        ];
        return view('schedules.index',$params);
    }

    public function ajaxSchedules($type = ''){
        $match_ids = request()->match_ids;
        $match_ids = $match_ids ? explode(',',$match_ids) : [];
        $items = Schedule::getAll($type,$match_ids);
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
