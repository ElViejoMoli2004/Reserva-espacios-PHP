<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class Acciones extends Controller
{
    public function indexLog()
    {
        $logs = Log::latest()->paginate(10);
        return view('modules.dashboard.Administradores.Log.log', compact('logs'));
    }
}
