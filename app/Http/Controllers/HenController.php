<?php

namespace App\Http\Controllers;

use App\Models\Hens;
use App\Models\User;
use App\Models\Rating;
use Illuminate\Http\Request;

class HenController extends Controller
{
    //Show all hens
    public function index()
    {

        return view('hens.index', [
            'hens' => Hens::latest()->filter(request(['tag', 'search']))->paginate(10)
        ]);
    }

    //Show one hen
    public function show(Hens $hen)
    {
        return view('hens.show', [
            'hen' => $hen
        ]);
    }

    //Show create form
    public function create()
    {
        return view('hens.create');
    }

    //Store Hen's Data
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'birth' => 'required',
            'description' => 'required',
            'sex' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();        
        
        Hens::create($formFields);

        return redirect('/')->with('message', 'Adatok felvétele sikeres volt!');
    }

    public function edit(Hens $hen)
    {

        return view('hens.edit', [
            'hen' => $hen
        ]);
    }

    //Update Hen's Data
    public function update(Request $request, Hens $hen)
    {

        if ($hen->user_id != auth()->id()) {
            abort(403, "Nem agy jogosult végrehajtani!");
        }

        $formFields = $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'birth' => 'required',
            'description' => 'required',
            'sex' => 'required',
            'tags' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $hen->update($formFields);

        return redirect('/')->with('message', 'Adatok szerkesztése sikeres volt!');
    }

    //Delete hen
    public function destroy(Hens $hen)
    {
        if ($hen->user_id != auth()->id()) {
            abort(403, "Nem vagy jogosult végrehajtani!");
        }

        $hen->delete();

        return redirect('/')->with('message', 'Adatok törlése sikeres volt!');
    }

    //Manage Hens
    public function manage()
    {
        return view('hens.manage', ['hens' => auth()->user()->hens]);
    }

}
