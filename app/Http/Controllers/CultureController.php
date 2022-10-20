<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Culture;

class CultureController extends Controller
{

    public function index()
    {
        $cultures = Culture::all();
        return view('cultures.index', [
            'cultures' => $cultures
        ]);

    }


    public function create()
    {


        return view('cultures.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'culture' => 'required',
            'holidays' => 'required',
            'language' => 'required',
            'religion' => 'required',
            'lifestyle' => 'required',
            'clothes' => 'required',
            'food' => 'required'
        ]);

        Culture::create([
            'country' => $request->input('country'),
            'culture' => $request->input('culture'),
            'holidays' => $request->input('holidays'),
            'language' => $request->input('language'),
            'religion' => $request->input('religion'),
            'lifestyle' => $request->input('lifestyle'),
            'clothes' => $request->input('clothes'),
            'food' => $request->input('food')
        ]);

//            return back()->with('success', 'Data has been sent');
        return redirect('cultures');

    }


    public function show($id)
    {
        $culture = Culture::find($id);
        return view('cultures.show', [
            ' culture' => $culture
        ]);
    }


    public function edit($id)

    {
        $cultures = Culture::find($id);
        return view('cultures.edit', compact('cultures'));

    }

    public function update(Culture $culture)
    {
        $cultures = request()->validate([
            'country' => 'required',
            'culture' => 'required',
            'holidays' => 'required',
            'language' => 'required',
            'religion' => 'required',
            'lifestyle' => 'required',
            'clothes' => 'required',
            'food' => 'required'

        ]);

        $culture->update($cultures);

        return redirect(route('cultures.index', $culture->id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $info = Culture::find($id);
        $info->delete();

        return redirect()->route('cultures.index');
    }
}
