<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Team extends Model {
    protected $table = 'teams';
    protected $primaryKey = 'team_id';

    public function sclass(){
        return $this->belongsTo(Sclass::class,'sclass_id','sclass_id');
    }

}