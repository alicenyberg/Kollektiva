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

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $residence = new Residence();
        $residence->name = $request->input('name');
        $residence->squaremeters = $request->input('squaremeters');
        $residence->rooms = $request->input('rooms');
        $residence->rent = $request->input('rent');
        //$residence->bathrooms = $request->input('bathrooms');
        $residence->residents = $request->input('residents');
        $residence->smoking = $request->input('smoking');
        $residence->animals = $request->input('animals');
        $residence->partying = $request->input('partying');


        $pictureName = time().'.'.$request->image->getClientOriginalName();
        $request->image->move(public_path('uploads'), $pictureName);

        $residence->image = $pictureName;

        $residence->save();


        return view('accountdone');
    }
}
