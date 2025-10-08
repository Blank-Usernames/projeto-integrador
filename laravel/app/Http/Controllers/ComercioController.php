<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comercio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ComercioController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/'],
            'description' => 'required|string',
            'service' => ['required', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ]+$/'],
            'city' => ['required', 'regex:/^[A-Za-zÀ-ÿ\s]+ - (AC|AL|AP|AM|BA|CE|DF|ES|GO|MA|MT|MS|MG|PA|PB|PR|PE|PI|RJ|RN|RS|RO|RR|SC|SP|SE|TO)$/'],
            'neighborhood' => ['required', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/'],
            'street' => ['required', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ0-9 ]+$/'],
            'street_number' => 'required|max:5',
            'cep' => ['required', 'regex:/^\d{5}-\d{3}$/'],
            'telephone' => ['required', 'regex:/^\(\d{2}\) \d{4,5}-\d{4}$/'],
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ], [
            'name.required' => 'O nome é obrigatório.',
            'name.regex' => 'O nome não pode conter caracteres especiais.',
            'telephone.required' => 'O telefone é obrigatório.',
            'city.required' => 'A cidade é obrigatória.',
            'city.regex' => 'Formato inválido. Use: Nome da Cidade - UF (Ex: Santo André - SP).',
            'description.required' => 'A descrição é obrigatória.',
            'neighborhood.required' => 'O bairro é obrigatória.',
            'neighborhood.regex' => 'Formato inválido. Insira um bairro (Ex: Jordanópolis).',
            'cep.required' => 'O CEP é obrigatório.',
            'image.required' => 'A Imagem é obrigatória.',
        ]);// 2MB

        // Salvar imagem
        $imagePath = $request->file('image')->store('comercios', 'public');

        // Criar comércio
        $comercio = new Comercio();
        $comercio->user_id = Auth::id();
        $comercio->name = $request->name;
        $comercio->description = $request->description;
        $comercio->service = $request->service;
        $comercio->city = $request->city;
        $comercio->neighborhood = $request->neighborhood;
        $comercio->street = $request->street;
        $comercio->streetNum = $request->street_number;
        $comercio->CEP = $request->cep;
        $comercio->telephone = $request->telephone;
        $comercio->image = $imagePath;

        $comercio->save();

        return redirect()->back()->with('success', 'Comércio cadastrado com sucesso!');
    }
}
