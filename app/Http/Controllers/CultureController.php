<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Culture;

class CultureController extends Controller
{
// In deze functie kun je eigenschappen van een object initialiseren
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'index']);
        $this->middleware(['admin'])->except(['index', 'create', 'store', 'update', 'edit']);
    }

    //Dit is een openbare functie die standaard wordt aangeroepen wanneer de startpagina wordt geopend
    public function index()
    {
        $cultures = Culture::all();
        return view('cultures.index', [
            'cultures' => $cultures,
        ]);

        }

//Deze functie wordt gebruikt om eenvoudig een array door te geven en gegevens in de database in te voegen
    public function create()
    {
        $cultures = Culture::all();
        return view('cultures.create', [
            'cultures' => $cultures,
        ]);
    }
//Deze functie wordt gebruikt om bestanden op te slaan op je server
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
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
            'user_id' => Auth::user()->id,
            'country' => $request->input('country'),
            'culture' => $request->input('culture'),
            'holidays' => $request->input('holidays'),
            'language' => $request->input('language'),
            'religion' => $request->input('religion'),
            'lifestyle' => $request->input('lifestyle'),
            'clothes' => $request->input('clothes'),
            'food' => $request->input('food')
        ]);
        return redirect()->route('cultures.index');

    }

//Deze functie zorgt ervoor data van de id op een apart scherm te zien is
    public function show($id)
    {
        $culturesMade = Culture::where('user', '=', Auth::id())->count();
        $message = 'View can be seen after you ad 2 new cultures';

        $culture = Culture::find($id);

        if ($culture->user_id !== Auth::user()->id && Auth::user()->role !== 'admin') {
            return view('cultures.index', compact('message', 'culturesMade'));
        }

        return view('cultures.show', [
            'culture' => $culture
        ]);
    }

//Dit is de functie die ervoor zorgt dat de id die je aanklikt de oude data blijft houden
    public function edit($id)
    {
        $culture = Culture::find($id);
        if ($culture->user_id !== Auth::user()->id) {
            return redirect()->route('cultures.index');
        } else {
            return view('cultures.edit', compact('culture'));
        }
    }

    //Deze functie zorgt ervoor dat het de nieuwe data die ingevuld is update naar de home page
    public function update(Request $request, $id)
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

        $culture = Culture::find($id);
        if ($culture->user_id !== Auth::user()->id) {
            return redirect()->route('cultures.index');
        } else {
            $culture->country = $request->get('country');
            $culture->culture = $request->get('culture');
            $culture->holidays = $request->get('holidays');
            $culture->language = $request->get('language');
            $culture->religion = $request->get('religion');
            $culture->lifestyle = $request->get('lifestyle');
            $culture->clothes = $request->get('clothes');
            $culture->food = $request->get('food');
        }

        $culture->update();

        return redirect()->route('cultures.index', $culture->id);
    }

    //Dit is de functie die gebruikt wordt op items/producten te verwijderen
    public function destroy($id)
    {
        $info = Culture::find($id);

        if ($info->user_id === Auth::id() || Auth::user()->role === 'admin') {
            $info->delete();
        }

        if (Auth::user() && Auth::user()->role === 'admin') {
            return redirect('cultures');
        } elseif (Auth::user()) {
            return redirect('cultures');
        }
    }



}
