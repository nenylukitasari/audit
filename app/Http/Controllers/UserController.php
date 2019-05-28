<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Users;

class UserController extends Controller
{
    public function index() {
        $users = DB::table('users')
        ->orderBy('created_at', 'asc')
        ->get();
        return view('user_role', compact('users'));
    }
    public function store(Request $request)
    {
    	$user = new Users;
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('message_success',"Berhasil menambahkan data");
    }
    public function getData(Request $request)
    {
        $id = $request->input('id');
        $data = Users::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        
	    $user = Users::find($request->edit_id_user);
	    $user->nama = $request->edit_user_nama;
        $user->email = $request->edit_user_email;
        $user->role = $request->edit_user_role;
        $user->save();
	    return redirect()->back()->with('message_success',"Berhasil mengubah data");
    }
            
}
