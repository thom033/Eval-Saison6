<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

class DatabaseResetController extends Controller
{
    public function resetDatabase()
    {
        // Exécuter la commande Artisan pour exécuter les fichiers SQL
        Artisan::call('db:run-sql-files');

        return redirect('/admin/login')->with('status', 'Database has been reset successfully.');
    }
}
