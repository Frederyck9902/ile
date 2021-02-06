<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ley;

class LeyController extends Controller
{
    //
    public function getIndex(){
		$ley = Ley::all();
        return view('index',array('ley'=>$ley));
    }
}
