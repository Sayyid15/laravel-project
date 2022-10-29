<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Culture;

class CultureController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth')->except(['show', 'index']);
        $this->middleware(['admin'])->only(['destroy', 'statusChange']);
        $this->middleware(['admin', 'auth'])->only(['create', 'store', 'update', 'edit']);

    }

    public function index()
    {
        $cultures = Culture::all();
        return view('cultures.index', [
            'cultures' => $cultures,
        ]);
    }

    public function create()
    {
        $cultures = Culture::all();
        return view('cultures.create', [
            'cultures' => $cultures,
        ]);
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
            'user_id' =>\Auth::user()->id,
            'country' => $request->input('country'),
            'culture' => $request->input('culture'),
            'holidays' => $request->input('holidays'),
            'language' => $request->input('language'),
            'religion' => $request->input('religion'),
            'lifestyle' => $request->input('lifestyle'),
            'clothes' => $request->input('clothes'),
            'food' => $request->input('food')
        ]);


        return redirect('cultures');

    }


    public function show( $id)
    {

        $culturesMade = Culture::where('user_id', '=', \Auth::id())->count();
        $message = '';

        $culture = Culture::find($id);

        if (\Auth::id() !== $culture->user_id && \Auth::user()->role !== 'admin') {
            return view('cultures.index', compact('message',  'culture', $culturesMade));
        }

        return view('cultures.show', [
            'culture' => $culture
        ]);
    }


    public function edit($id)
    {
        $culture = Culture::find($id);
        if ($culture->user_id !== \Auth::user()->id ) {
            return redirect()->route('cultures.index');
        } else {
        return view('cultures.edit', compact('culture'));
        }
    }

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
        if ($culture->user_id !== \Auth::user()->id) {
            return redirect()->route('cultures.index');
        } else {
            $culture->country = $request->get('country');
            $culture->culture = $request->get('culture');
            $culture->holidays = $request->get('holidays');
            $culture->language = $request->get('language');
            $culture->religion = $request->get('religion');
            $culture->lifestyle = $request->get('lifestyle');
            $culture->clothes = $request->file('clothes');
            $culture->food = $request->get('food');
        }

        $culture->update($culture);

        return redirect(route('cultures.index', $culture->id));
    }

    public function destroy($id)
    {
        $info = Culture::find($id);


        if ($info->user_id === \Auth::id() || \Auth::user()->role === 'admin') {
            $info->delete();
        }

        if (\Auth::user() && \Auth::user()->role === 'admin') {
            return redirect('cultures');
        } elseif (\Auth::user()) {
            return redirect('cultures');
        }
    }


    public function search()
    {

        $search = $_GET['searchQuery'];
        $cultures = Culture::where('country', 'LIKE', '%' . $search . '%')
            ->orWhere('culture', 'LIKE', '%' . $search . '%')->get();

        return view('cultures.search', compact('cultures'));
    }

    public function statusChange(Request $request)
    {
        $culture = Culture::find($request->culture_id);
        $culture->status = $request->status;
        $culture->save();
    }

}
