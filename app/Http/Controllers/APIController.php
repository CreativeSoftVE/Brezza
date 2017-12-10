<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class APIController extends Controller
{
    public function index()
    {
        $countries = DB::table("countries")->pluck("name","id")->all();
        return view('index',compact('countries'));
    }
    public function getStateList(Request $request)
    {
        $states = DB::table("states")
                    ->where("country_id",$request->country_id)
                    ->pluck("name","id")->all();
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$request->state_id)
                    ->pluck("name","id")->all();
        return response()->json($cities);
    }
}