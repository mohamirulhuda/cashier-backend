<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::with('roles:name')
            ->where('id', '>', 2)
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            // 'role' => 'required|in:1,2',
            'username' => 'required|unique:users|alpha_num',
            'email' => 'email|unique:users',
            'password' => 'required|min:6'
        ]);

        $data['password'] = bcrypt($request->password);

        $user = User::create($data);;
        $user->assignRole('admin');

        return response()->json([
            'message' => "Data pengguna disimpan"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
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
        $user->username = $request->username;
        $user->email = $request->email;

        if ($request->changePassword) {
            $user->password = Hash::make($request->password);
        }

        // $role = $request->role == 1 ? 'admin' : 'cashier';

        // if ($request->role > 0) {
        //     $user->assignRole($role);
        // }

        $user->save();

        return response()->json([
            'message' => "User Updated succesfully"
        ]);
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
        return response()->json([
            'message' => "User Deleted succesfully"
        ]);
    }

    // SECTION DATA & INFO

    public function datatable(Request $request)
    {
        return User::where('id', '>', 2)
            ->with('roles')
            ->orderBy('id', 'ASC')
            ->paginate($request->length);
    }

    public function show_all_role()
    {
        $resources =  Role::where('id', '>', '1')->get();
        $response = [];

        foreach ($resources as $resource) {
            $data = [
                'id' => $resource->id,
                'value' => $resource->id,
                'label' => $resource->name,
            ];
            array_push($response, $data);
        };

        return $response;
    }
}
