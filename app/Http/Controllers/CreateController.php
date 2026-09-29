<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CreateController extends Controller
{
    public function ajouter()
    {
        return view('/ajouter');
    }

    public function create(Request $request)
    {   
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',
            'description' => 'required',
            'event_date' => 'required|date',
            'location' => 'required|string|max:150|nullabe',
        ]);
        
        if ($validator->fails()) {
            return redirect('/ajouter')
                ->withErrors($validator)
                ->withInput();
        }

        

        return redirect('/ajouter');
    }

    public function modifier(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:150',
            'description' => 'required',
            'event_date' => 'required|date',
            'location' => 'required|string|max:150|nullabe',
        ]);
        
        if ($validator->fails()) {
            return redirect('/ajouter')
                ->withErrors($validator)
                ->withInput();
        }

        
    }
}
