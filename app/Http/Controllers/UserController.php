<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('tb_user')->get();
        return view('dashboard', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        DB::table('tb_user')->insert([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = DB::table('tb_user')->where('id_user', $id)->first();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        DB::table('tb_user')->where('id_user', $id)->update([
            'username' => $request->username,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        DB::table('tb_user')->where('id_user', $id)->delete();
        return redirect()->route('users.index');
    }
}