<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Validator;

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
    	$rules["email"] = 'unique:users';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {
            $user = new User;
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            return redirect()->back()->with('message_success',"Berhasil menambahkan data");
        }
        return redirect()->back()->with('message_error',"Gagal menambahkan data. Email telah terpakai.");
    }
    public function getData(Request $request)
    {
        $id = $request->input('id');
        $data = User::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $rules["edit_user_email"] = 'unique:users,email,'.$request->edit_id_user.',id' /*. $request->edit_id_user*/;
        $validator = Validator::make($request->all(), $rules);
        if ($validator->passes())
        {

            $user = User::find($request->edit_id_user);
    	    $user->nama = $request->edit_user_nama;
            $user->email = $request->edit_user_email;
            $user->role = $request->edit_user_role;
            $user->save();
    	    return redirect()->back()->with('message_success',"Berhasil mengubah data");
        }
        return redirect()->back()->with('message_error',"Gagal menambahkan data. Email telah terpakai.");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message_success',"Berhasil menghapus data");
    }
            
}
