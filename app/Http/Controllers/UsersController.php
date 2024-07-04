<?php

namespace App\Http\Controllers;

use App\Models\{
    User,
    Role
};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersInfo = user::with('roles')->get();
        $currentTime = Carbon::now();

        return view('users.index', compact('usersInfo', 'currentTime'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = user::with('roles')->where(['id' => $id])->firstOrFail();
        $userRole = $user->roles[0]->name;
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $imageName = "";
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role' => 'required|string|in:superadmin,admin,user',
        ];

        $validatedData = $request->validate($rules);
        $image = $request->file('image');
        if ($image) :
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        endif;

        $role = $request->input('role');
        if ($role) :
            $user = User::where(['id' => $id])->firstOrFail();
            $user->syncRoles([$role]);
        endif;
        $mytime = Carbon::now();

        $user = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'image' => $imageName,
            'updated_at' => $mytime->toDateTimeString(),
        ];
        User::where('id', $id)->update($user);

        return redirect()->back()->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
