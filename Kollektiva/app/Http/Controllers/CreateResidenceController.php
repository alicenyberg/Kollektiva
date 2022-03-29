<?php

namespace App\Http\Controllers;

use App\Models\Residence;
use Illuminate\Http\Request;

class CreateResidenceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // $this->validate($request, [
        //     'description' => 'required|string|min:10'
        // ]);


        $residence = new Residence();
        $residence->name = $request->input('name');
        $residence->squaremeters = $request->input('squaremeters');
        $residence->rooms = $request->input('rooms');
        $residence->bathrooms = $request->input('bathrooms');
        $residence->residents = $request->input('residents');
        $residence->smoking = $request->input('smoking');
        $residence->animals = $request->input('animals');
        $residence->partying = $request->input('partying');
        $residence->save();

        return back();
    }
}
