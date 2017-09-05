<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Tag;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function index(Request $request){
        $tags= Tag::Search($request->name)->orderBy('id','DESC')->paginate(7);
        return view('admin.tags.index')->with('tags',$tags);
    }
    
    public function create(){
        return view('admin.tags.create');
    }
    
    public function store(TagRequest $request){
        $tag = new Tag($request->all());
        $tag->save();
        Flash::success('La etiqueta ' . $tag->name . ' ha sido registrada exitosamente.');
        return redirect()->route('tags.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id){
        $tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }
    
    public function update(Request $request, $id){
        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();
        Flash::warning('La etiqueta ' . $tag->name . ' ha sido actualizada exitosamente.');
        return redirect()->route('tags.index');
    }
    
    public function destroy($id){
        $tag = Tag::find($id);
        $tag->delete();
        Flash::error('La etiqueta ' . $tag->name . ' ha sido eliminada exitosamente.');
        return redirect()->route('tags.index');
    }
}
