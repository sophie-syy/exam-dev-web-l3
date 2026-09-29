<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Event;

class MofifierController extends Controller
{   
    public function p_modifier()
    {
        return view('/modifier');
    }

    public function f_modifier(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',
            'description' => 'required',
            'event_date' => 'required|date',
            'location' => 'required|string|max:150|nullabe',
        ]);
        
        if ($validator->fails()) {
            return redirect('/modifier')
                ->withErrors($validator)
                ->withInput();
        }

        
    }

    public function suprimer(int $id)
    {
        $variable = Event::find($id);

        if ($variable->isEmpty())
        {
            return view('/modifier', compact('message', "Il n'existe pas"));
        }

        Event::deleted($id);
        return view('/modifier', compact('message', "supprimer"));
        
    }
}
