<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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
            return view('client.welcome', compact('client'));
        } else {
            $client = new Client();
            $client->numero_telephone = $request->numero_telephone;
            $client->save();
            return view('client.welcome', compact('client'));
        }
    }

    public function logout(Request $request)
    {
        return redirect('/');
    }
}
