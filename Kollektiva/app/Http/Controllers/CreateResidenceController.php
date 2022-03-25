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
        $residence->residents = $request->input('residents');
        $residence->bathrooms = $request->input('bathrooms');
        $residence->save();

        return back();
    }
}
