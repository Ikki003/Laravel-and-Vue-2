<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestFile;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use App\Models\App_user;

class UserController extends Controller
{
    public function index() {

        $users = App_user::all();
        return Inertia::render('User/Index', ['users' => $users]);
            
    }

    public function store(Request $request, App_user $app_user) {

        $app_user->create(
            Request::validate([
                'id' => $app_user->id,
                'name' => $app_user->name,
                'pr_apellido' => $app_user->pr_apellido,
                'sg_apellido' => $app_user->sg_apellido,
            ])
        );
        
        return redirect('user')->with('success', 'User updated successfully');

    }

    public function show(App_user $app_user) {

    }

    public function edit(App_user $user) {

        return Inertia::render('User/Edit', ['user' => [
            'id' => $user->id,
            'name' => $user->name,
            'pr_apellido' => $user->pr_apellido,
            'sg_apellido' => $user->sg_apellido,
        ]]);
    }

    public function update(App_user $user, Request $request) {

        $user->name = $request->name;
        $user->pr_apellido = $request->pr_apellido;
        $user->sg_apellido = $request->sg_apellido;
        $user->save();

        return redirect('user')->with('success', 'User updated successfully');

    }

    public function delete($id) {

        App_user::find($id)->delete();

        return redirect('user')->with('success', 'User deleted successfully');

    }
}
