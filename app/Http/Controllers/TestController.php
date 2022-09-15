<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    //giving values in the database table
    public function myFunction(){
        return view('test_view');
    }

    public function getDataItems(Request $request){
        // dump or die
        // dd($request);
        Test::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        // return redirect()->route('test_view');
        return redirect()->back();
    }

}
