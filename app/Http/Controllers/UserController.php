<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Validator;

class UserController extends Controller
{
    public function index() {
        $users = User::withTrashed()
        ->orderBy('deleted_at', 'asc')
        ->get();
        return view('user_role', compact('users'));
    }
    public function store(Request $request)
    {
    	$rules["username"] = 'unique:users';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {
            $user = new User;
            $user->nama = $request->nama;
            $user->username = $request->username;
            $user->role = $request->role;
            $user->save();
            return redirect()->back()->with('message_success',"Berhasil menambahkan data");
        }
        return redirect()->back()->with('message_error',"Gagal menambahkan data. Username telah terpakai.");
    }
    public function getData(Request $request)
    {
        $id = $request->input('id');
        $data = User::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $rules["edit_user_username"] = 'unique:users,username,'.$request->edit_id_user.',id';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {

            $user = User::find($request->edit_id_user);
    	    $user->nama = $request->edit_user_nama;
            $user->username = $request->edit_user_username;
            $user->role = $request->edit_user_role;
            $user->save();
    	    return redirect()->back()->with('message_success',"Berhasil mengubah data");
        }
        return redirect()->back()->with('message_error',"Gagal menambahkan data. Username telah terpakai.");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message_success',"Berhasil menghapus data");
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->find($id);
        $user->restore();
        return redirect()->back()->with('message_success',"Berhasil mengembalikan data");       
    }
            
}
