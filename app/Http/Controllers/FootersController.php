<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Footer;

class FootersController extends Controller
{
    public function index(Request $request){
        $footers= Footer::first();
        return view('admin.lfooters.index')->with('footers',$footers);
    }
    
    public function show(){
        //
    }
    
    public function edit(){
        $footer = Footer::find(1);
        return view('admin.lfooters.edit')->with('footer', $footer);
    }
    
    public function update(Request $request, $id){
        $footer = Footer::find($id);
        $footer->fill($request->all());
        $footer->save();
        Flash::warning('Se ha actualizado exitosamente la sección de pie de página.');
        return redirect('admin/footers');
    }
}
