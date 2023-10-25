<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        return view('warga/index', compact(['warga']));
    }

    public function create()
    {
        return view('warga/create');
    }

    public function store(Request $request)
    {
        Warga::create($request->except(['_token', 'submit']));
        return redirect('warga');
    }
}
