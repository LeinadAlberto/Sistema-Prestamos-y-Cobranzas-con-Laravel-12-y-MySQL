<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjusteController extends Controller
{
    public function index() {
        return view('admin.ajustes.index');
    }

    public function store(Request $request) {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        /* return response()->json($request->all()); */
    }
}
