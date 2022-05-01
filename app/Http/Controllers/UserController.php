<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    // public function __construct() 
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $this->authorize('haveaccess','user.index');
        $users =  User::with('roles')->orderBy('id','Desc')->paginate(2);

        return view('user.index',compact('users'));
    }

    public function create()
    {
       //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $this->authorize('view', [$user, ['user.show','userown.show'] ]);
        $roles= Role::orderBy('name')->get();

        return view('user.view', compact('roles', 'user'));    }

    public function edit(User $user)
    {
        $this->authorize('update', [$user, ['user.edit','userown.edit'] ]);
        $roles= Role::orderBy('name')->get();

        return view('user.edit', compact('roles', 'user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'         => 'required|max:50|unique:users,email,'.$user->id            
        ]);

        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('user.index')
            ->with('status_success','User updated successfully'); 
    }

    public function destroy(User $user)
    {
        $this->authorize('haveaccess','user.destroy');
        $user->delete();

        return redirect()->route('user.index')
            ->with('status_success','User successfully removed'); 
    }
}