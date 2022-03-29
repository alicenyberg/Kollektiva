<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

class StepThreeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {


        // $residence = new Residence();
        // $residence->smoking = $request->input('smoking');
        // $residence->animals = $request->input('animals');
        // $residence->partying = $request->input('partying');
        // $residence->save();

        // return view('createAccount/stepThree');
    }
}
