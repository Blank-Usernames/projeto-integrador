<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z0-9]+$/'],
            'email' => 'required|email|unique:users,email,',
            'telephone' => 'required|string|max:20',
            'city' => ['required', 'string', 'regex:/^[A-Za-zÀ-ÿ\s]+ - (AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)$/'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[!@#$%^&*(),.?":{}|<>]/',
                'regex:/[0-9]/',
                'confirmed'
            ],
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.regex' => 'O nome não pode conter espaços ou caracteres especiais.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Formato de e-mail inválido.',
            'email.unique' => 'Este e-mail já está em uso.',
            'telephone.required' => 'O telefone é obrigatório.',
            'city.required' => 'A cidade é obrigatória.',
            'city.regex' => 'Formato inválido. Use: Nome da Cidade - UF (Ex: Santo André - SP).',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.regex' => 'A senha deve conter pelo menos 1 número e 1 caractere especial.',
            'password.confirmed' => 'As senhas não coincidem.',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'telephone' => $request->telephone,
            'city' => $request->city,
        ]);

        return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
    }

    
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return redirect()->back()->with('error', 'Credenciais inválidas.');
    }

    public function index()
    {
        if (Auth::check()) {
            return view('home'); // Usuário logado
        } else {
            return view('banner'); // Visitante
        }
    }

    
    public function editar()
    {
        $usuario = Auth::user(); // Pega o usuário logado
        return view('editar', compact('usuario'));
    }

    
    
    public function atualizar(Request $request)
    {
        $usuario = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z0-9]+$/'],
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'telephone' => 'required|string|max:20',
            'city' => ['required', 'string', 'regex:/^[A-Za-zÀ-ÿ\s]+ - (AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)$/'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[!@#$%^&*(),.?":{}|<>]/',
                'regex:/[0-9]/',
                'confirmed'
            ],
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.regex' => 'O nome não pode conter espaços ou caracteres especiais.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Formato de e-mail inválido.',
            'email.unique' => 'Este e-mail já está em uso.',
            'telephone.required' => 'O telefone é obrigatório.',
            'city.required' => 'A cidade é obrigatória.',
            'city.regex' => 'Formato inválido. Use: Nome da Cidade - UF (Ex: Santo André - SP).',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.regex' => 'A senha deve conter pelo menos 1 número e 1 caractere especial.',
            'password.confirmed' => 'As senhas não coincidem.',
        ]);

        $usuario->update([
            'name' => $request->name,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'city' => $request->city,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('editar')->with('success', 'Dados atualizados com sucesso!');
    }
};



