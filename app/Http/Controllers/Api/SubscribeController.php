<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{

    public function index()
    {
        $subscribe = Subscribe::all();
        return $subscribe;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $subscribe = Subscribe::create($data);

        // Realiza otras acciones necesarias después de guardar la suscripción...

        return response()->json(['message' => 'Suscripción creada exitosamente'], 201);
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
