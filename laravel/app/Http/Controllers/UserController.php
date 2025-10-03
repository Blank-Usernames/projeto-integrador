<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'telefone' => 'nullable|string|max:20',
            'local' => 'nullable|string|max:255',
        ]);

        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telefone' => $request->telefone,
            'local' => $request->local,
        ]);

        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    }
};

