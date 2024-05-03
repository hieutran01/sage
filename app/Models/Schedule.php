<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Schedule extends Model {
    protected $table = 'schedules';
    protected $primaryKey = 'schedule_id';

    public function homeTeam(){
        return $this->belongsTo(Team::class,'home_team_id','team_id');
    }

    public function guestTeam(){
        return $this->belongsTo(Team::class,'guest_team_id','team_id');
    }

    public function sclass(){
        return $this->belongsTo(Sclass::class,'sclass_id','sclass_id');
    }
}