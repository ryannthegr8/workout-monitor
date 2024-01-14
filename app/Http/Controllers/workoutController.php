<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListWorkout;

class workoutController extends Controller
{
    public function save(Request $request){
      
        $newListWorkout = new ListWorkout();
        $newListWorkout->pushUp = $request->pushUp;
        $newListWorkout->save();

        return redirect('/');
    }
}
