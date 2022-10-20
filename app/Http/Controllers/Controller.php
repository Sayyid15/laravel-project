<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//class CultureController extends Controller
//{
////    public function show(Request $request)
////    {
////        //validate
////        $request->validate([
////
////        ]);
////        Culture::create($request->all());
////
////        return redirect()->route('culture.index');
////    }
//
//    public function index()
//    {
//        $data = array(
//            'list' => DB::table('cultures')->get()
//        );
//        return view('cultures.index', $data);
//    }
//
//    public function add(Request $request)
//    {
//        $request->validate([
//
//            'country' => 'required',
//            'culture' => 'required',
//            'holidays' => 'required',
//            'language' => 'required',
//            'religion' => 'required',
//            'lifestyle' => 'required',
//            'clothes' => 'required',
//            'food' => 'required'
//        ]);
//
//        $query = DB::table('cultures')->insert([
//            'country' => $request->input('country'),
//            'culture' => $request->input('culture'),
//            'holidays' => $request->input('holidays'),
//            'language' => $request->input('language'),
//            'religion' => $request->input('religion'),
//            'lifestyle' => $request->input('lifestyle'),
//            'clothes' => $request->input('clothes'),
//            'food' => $request->input('food')
//        ]);
//        if ($query) {
//            return back()->with('success', 'Data has been sent');
//        } else {
//            return back()->with('fail', 'something went wrong');
//
//        }
//    }
//}
//
//
//
