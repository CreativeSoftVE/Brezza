<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\User;
use App\Http\Requests\UserRequest;


class UsersController extends Controller
{
    public function index()
    {
        $users= User::orderBy('id','ASC')->paginate(7);
        return view('admin.users.index')->with('users',$users);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(UserRequest $request)
    {
        $user= new User($request->all());
        $user->password=bcrypt($request->password);
        $user->save();
        
        Flash::success('El usuario: ' .$user->name. ' ha sido registrado exitosamente');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
        
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        
        Flash::success('El usuario: ' .$user->name. ' ha sido actualizado exitosamente');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('El usuario ' .$user->name. ' ha sido borrado exitosamente')->error();
        return redirect()->route('users.index');
    }
}
