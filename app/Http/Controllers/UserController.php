<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Spatie\Permission\Models\Permission;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Traits\HasRoles;

class UserController extends Controller
{


    public function index(Request $request)
    {

        // $users = User::paginate(20);
        // $unverifiedUsers = User::where('email_verified_at', null)->get();
        // $unActivatedUsers = User::where('isActivated', 0)->whereNotNull('email_verified_at')->get();

        $roles = Role::paginate(10);
        $permissions = Permission::paginate(10);
        $users = User::paginate(10);

        return view('admin.users.index', compact('roles','permissions','users'));
    }

    public function create(Request $request)
    {
        $roles = Role::get();
        return view('admin.users.create', ['roles' => $roles]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->profile()->create(['telephone' => '+1111111111']);

        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }
        //Redirect to the admin.users.index view and display message
        return redirect()->route('admin.users.index')->with(
            'flash_message',
            'User successfully added.'
        );
    }


    public function show(Request $request, User $user)
    {
        return view('admin.users.show', compact('user'));
    }


    public function edit(Request $request, User $user)
    {
        // $user = User::findOrFail($user);
        $roles = Role::get();
        return view('admin.users.edit', compact('user', 'roles'));
    }


    public function update(UserUpdateRequest $request, User $user)
    {
        $user->update($request->validated());

        // $request->session()->flash('user.id', $user->id);

        $input = $request->only(['firstName', 'lastName', 'email', 'password']); //Retreive the name, email and password fields
        $roles = $request['roles'];
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles
        } else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return redirect()->route('admin.users.index')
            ->with(
                'flash_message',
                'User successfully edited.'
            );
    }
    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists.');
    }

    public function approve(User $user) {

    }

    public function destroy(User $user)
    {
        if ($user->id == Auth::user()->id) {
            return back()->with('flash_message', 'Cannot Delete Your Own Account');
        }

        $user->delete();
        return back()->with('flash_message', 'Account Successfully deleted!');
    }
}
