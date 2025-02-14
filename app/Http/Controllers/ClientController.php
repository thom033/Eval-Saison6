<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    public function showLoginForm()
    {
        return view('client.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'numero_telephone' => 'required',
        ]);

        $client = Client::where('numero_telephone', $request->numero_telephone)->first();

        if ($client) {
            // Enregistrer le client dans la session
            Session::put('client', $client);
            return view('client.welcome');
        } else {
            $client = new Client();
            $client->numero_telephone = $request->numero_telephone;
            $client->save();
            // Enregistrer le client dans la session
            Session::put('client', $client);
            return view('client.welcome');
        }
    }

    public function logout(Request $request)
    {
        // Supprimer le client de la session
        Session::forget('client');
        return redirect('/');
    }
}
