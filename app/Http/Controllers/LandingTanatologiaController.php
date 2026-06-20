<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class LandingTanatologiaController extends Controller
{
    public function landing()
    {
        return view('landingT');
    }

    public function thankyou()
    {
        return view('mensajeT');
    }

    public function store(Request $request)
{
    // ✅ Validación
    $validated = $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => ['required', 'regex:/^[0-9]{10}$/'],
    ]);

    Log::info('Tanatologia: Formulario recibido', $validated);

    $data_leader = [
        'FullName' => $validated['name'],
        'Email' => $validated['email'],
        'Telephone' => $validated['phone'],
        'ProspectionMeansId' =>"411",
        'Comments' => 'Landing Tanatología'
    ];

    try {
        $client = new \GuzzleHttp\Client();
        $client->post('https://api.leader.sale/carousel/add', [
            'json' => $data_leader,
            'timeout' => 10,
        ]);
    } catch (\Exception $e) {
        Log::error('Tanatologia: Error Leader', [
            'error' => $e->getMessage()
        ]);

        return back()->withErrors('Error al enviar la información');
    }

    // ✅ Redirige a la página de gracias
    return redirect()->route('mensajeT');
}

}
