<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Schedule extends Model {
    protected $table = 'schedules';
    protected $primaryKey = 'schedule_id';

    const TIME_NOW = '2024-05-20 21:30:00';
    const IS_LIVE = 1;
    const NOT_START = 0;
    const FINISHED = -1;
    const POSTPONED = -2;

    public function homeTeam(){
        return $this->belongsTo(Team::class,'home_team_id','team_id');
    }

    public function guestTeam(){
        return $this->belongsTo(Team::class,'guest_team_id','team_id');
    }

    public function sclass(){
        return $this->belongsTo(Sclass::class,'sclass_id','sclass_id');
    }

    // Custom methods
    public static function getAll( $match_state = '' ){
        $query = self::orderBy('match_time','ASC');
        if( $match_state !== '' ){
            if($match_state == self::IS_LIVE){
                $query->where('is_live',self::IS_LIVE);
            }else{
                $query->where('match_state',$match_state);
            }
        }
        $items = $query->get();
        $items_arr = [];
        foreach($items as $item){
            $items_arr[$item->sclass_id][] = $item;
        }
        return $items_arr;
    }
    // Attributes
    public function getMatchTimeFmAttribute()
    {
        if( $this->match_time ){
            return date('H:i',strtotime($this->match_time));
        }
        return '';
    }
    public function getMatchMinutesFmAttribute()
    {
        switch ($this->match_state) {
            case self::POSTPONED:
                return 'Hoãn';
                break;
            case self::FINISHED:
                return 'Đã kết thúc';
                break;
            case self::NOT_START:
                return 'Chưa bắt đầu';
                break;
            default:
                // Nghỉ giữa hiệp
                $halfTimeDuration = 45 * 60;
                $time_now = strtotime(self::TIME_NOW);
                $match_time = strtotime($this->match_time);
                $match_time2 = strtotime($this->match_time2);

                if( $time_now >= ($match_time + $halfTimeDuration) && $time_now <= $match_time2){
                    return 'Nghỉ giữa hiệp';
                }

                // Tính số phút hiệp 2 
                if( $time_now > $match_time2 ){
                    $startTime = $match_time2;
                    $endTime = $time_now;
                    $secondsPassed = $endTime - $startTime;
                    $minutesPassed = $secondsPassed / 60;
                    return ((int)$minutesPassed + 45)."'";
                }
                // Tính số phút hiệp 1
                if( $time_now >= $match_time ){
                    $startTime = $match_time;
                    $endTime = $time_now;
                    $secondsPassed = $endTime - $startTime;
                    $minutesPassed = $secondsPassed / 60;
                    return ((int)$minutesPassed + 0)."'";
                }
                
                break;
        }
        return '';
    }
}