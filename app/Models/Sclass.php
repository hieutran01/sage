<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Sclass extends Model {
    protected $table = 'sclasses';
    protected $primaryKey = 'sclass_id';

    const CUP = 0;
    const VDQG = 1;
    // Attributes
    public function getKindNameAttribute()
    {
        return $this->kind == self::CUP ? 'Đấu cup' : 'VĐQG';
    }
    // custom methods
    public static function getAll(){
        $items = self::all();
        $new_items = [];
        foreach($items as $item){
            $new_items[$item->sclass_id] = $item;
        }
        return $new_items;
    }
}