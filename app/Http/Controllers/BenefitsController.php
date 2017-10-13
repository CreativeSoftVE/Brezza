<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Benefit;

class BenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits= Benefit::first();
        return view('admin.lbenefits.index')->with('benefits',$benefits);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $benefit = Benefit::find(1);
        return view('admin.lbenefits.edit')->with('benefit', $benefit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $benefit = Benefit::find($id);
        $benefit->fill($request->all());
        $benefit->save();
        Flash::warning('Se ha actualizado exitosamente la sección de beneficios.');
        return redirect('admin/benefits');
        
        
    }

    
}
