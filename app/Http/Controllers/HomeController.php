<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function getHome(){
        return redirect()->action('App\\Http\\Controllers\\LeyController@getIndex');
    }
}
