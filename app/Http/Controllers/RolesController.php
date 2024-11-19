<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function roles()
    {
        // $roles = Role::all();
        return view('admin.roles')->with('roles');
    }

    // public function add()
    // {
    //     return view('admin.add');
    // }

    // public function insert(Request $request)
    // {
    //     $role = new Role;
    //     $role->name = $request->name;
    //     $role->save();
    //     return redirect()->route('admin.roles');
    // }

    // public function edit($id)
    // {
    //     $role = Role::find($id);
    //     return view('admin.edit')->with('role', $role);
    // }

    // public function update(Request $request, $id)
    // {
    //     $role = Role::find($id);
    //     $role->name = $request->name;
    //     $role->save();
    //     return redirect()->route('admin.roles');
    // }

    // public function delete($id)
    // {
    //     $role = Role::find($id);
    //     $role->delete();
    //     return redirect()->route('admin.roles');
    // }
}
