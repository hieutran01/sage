<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sclass;

class SclassController extends Controller
{
    public function index(){
        $items = Sclass::all();
        // dd($items);
        $params = [
            'items' => $items
        ];
        return view('sclasses.index',$params);
    }
    public function show($id)
    {
        $items = Sclass::find($id);
        $params = [
            'items' => $items
        ];
      
        return view('sclasses.show',$params);
    }
}
