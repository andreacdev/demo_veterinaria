<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class clientesController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'documentNumber' => 'required',
            'fullName' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $cliente = new cliente;
        $cliente->documentNumber = $request->documentNumber;
        $cliente->fullName = $request->fullName;
        $cliente->phone = $request->phone;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('clientes')->with('success','Cliente registrado correctamente');
    }

}
