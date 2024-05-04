<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Sclass extends Model {
    protected $table = 'sclasses';
    protected $primaryKey = 'sclass_id';

    const CUP = 0;
    const VDQG = 1;
    public function getKindNameAttribute()
    {
        return $this->kind == self::CUP ? 'Đấu cup' : 'VĐQG';
    }
}