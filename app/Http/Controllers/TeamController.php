<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){
        $items = Team::all();
        // dd($items);
        $params = [
            'items' => $items
        ];
        return view('teams.index',$params);
    }
}
