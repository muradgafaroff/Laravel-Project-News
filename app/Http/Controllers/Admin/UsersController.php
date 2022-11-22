<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.pages.users', compact('users'));
    }

    public function userAdd()
    {
        return view('admin.pages.user-add');
    }

    public function userEdit($id)
    {
        $users = User::find($id);
        return view('admin.pages.user-edit', compact('users'));
    }

    public function userSave(RegisterRequest $req)
    {
        $users = new User();
        $users->name = $req->name;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->save();
        return redirect()->route('users');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function update(UpdateRequest $req, $id)
    {
        $users = User::find($id);
        $users->name = $req->name;
        $users->email = $req->email;
        if ($req->password) {
            $users->password = Hash::make($req->password);
          }
        $users->save();


        return redirect()->route('users');
    }

    public function index()
    {
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

}
