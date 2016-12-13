<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }
    /*
     *  Show page with users
     */
    public function index(){
        $users = User::select(['id', 'name', 'email', 'isadm', 'banned'])->get();
        return view('users')->with(['users' => $users]);
    }
    /*
     *  Show edit page for user
     */
    public function edit($id){
        $user = User::where('id',$id)->first();
        return view('editUser')->with(['user' => $user]);
    }
    /*
     *  Delete user
     */
    public function delete(User $user){
        $user->delete();
        return redirect('/users');
    }
    /*
     *  Update user parameters
     */
    public function update($id, Request $request){
        $user = User::where('id',$id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        ($request->isadmin) ? $user->isadm = 1 : $user->isadm = 0;
        ($request->banned) ? $user->banned = 1 : $user->banned = 0;
        $user->save();
        return redirect('/users');
    }
}
