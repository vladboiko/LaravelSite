<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
				$users = DB::select('select id,name, email, created_at,role_id from users,model_has_roles where model_has_roles.role_id = 2');
				return view('admin.users.index_users',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                          $new_user = new user();
		$new_user->name = $request->name;
		$new_user->email = $request->email;
	//	$new_user->role_id = $request->role_id;
		$new_user->password = $request->password;
		$new_user->save();
		return redirect()->back()->withSuccess('user '.$new_user->name.'  was success added');
	

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
		return view('admin.users.edit_user',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
            $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
		$user->save();
		return redirect()->back()->withSuccess('The user '.$user->name.' was success updating');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
                $user->delete();
		return redirect()->back()->withSuccess('The user '.$user->name.' was success deleting');

    }
}
