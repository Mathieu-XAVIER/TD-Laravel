<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.users',['users' => $users]);
    }
    
    public function show(User $user){
        return view ('users.user', ['user' => $user]);
    }

    public function destroy(string $id){
        User::destroy($id);
        return redirect()->route('users.index')->with('status', 'Utilisateur supprimé');
    }

    public function edit(User $user){
        return view('users.edit_user', ['user' => $user]);
    }
    public function update(Request $request, User $user){
        $validated = $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable'],
            'birthdate' => ['nullable'],
            'password' => ['required', 'confirmed','min:8'],
        ]);

        $user->update($validated);

        return redirect()->route('users.show', $user)->with('status', 'Profile updated !');
    }

    public function create(User $user){
        return view('users.create_user', ['user' => new User]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'birthdate' => ['required'],
            'password' => ['required', 'confirmed','min:8',''],
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('status', 'Utilisateur ajouté !');

    }
}
