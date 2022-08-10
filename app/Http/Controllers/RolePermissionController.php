<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
   public function index(){

       $roles=Role::all();
       return view('admin.roles.index',compact('roles'));
   }

   public function create()
   {
       $permission = Permission::get()->groupBy('value');

       return view('admin.roles.create',compact('permission'));

   }

   public function store(Request $request)
   {
       $this->validate($request, [
           'name' => 'required|unique:roles,name',
           'permission' => 'required',
       ]);

       $role = Role::create(['name' => $request->name]);
       $role->syncPermissions($request->permission);

       return back()->with('success','Role created successfully');
   }

   public function edit($id)
   {
       $role = Role::find($id);
       $permission = Permission::get()->groupBy('value');

       $r=
       $rolePermissions = \DB::table("role_has_permissions")->where("role_id",$id)
           ->pluck('permission_id')
           ->toArray();


       return view('admin.roles.edit',compact('role','permission','rolePermissions'));
   }


    public function update(Request $request, $id)
    {
        // dd('1');
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->permission);
             return back()->with('success','Role updated successfully');

    }
}
