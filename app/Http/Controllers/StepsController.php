<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Step;

class StepsController extends Controller
{
    public function index(Request $request){
        $steps= Step::first();
        return view('admin.lsteps.index')->with('steps',$steps);
    }
    
    public function show(){
        //
    }
    
    public function edit(){
        $step = Step::find(1);
        return view('admin.lsteps.edit')->with('step', $step);
    }
    
    public function update(Request $request, $id){
        $step = Step::find($id);
        $step->fill($request->all());
        $step->save();
        Flash::warning('Se ha actualizado exitosamente la sección Pasos.');
        return redirect('admin/steps');
    }
    
}