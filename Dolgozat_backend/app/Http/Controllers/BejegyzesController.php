<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use App\Models\Tevekenysegek;
use Illuminate\Http\Request;

class BejegyzesController extends Controller
{
    public function index()
    {
        $bejegyzesek = Bejegyzesek::all();
        $tevekenysegek = Tevekenysegek::all();

        return compact('bejegyzesek', 'tevekenysegek');
    }
    
    public function store(Request $request)
    {
        $bejegyzes = new Bejegyzesek();
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->allapot = $request->allapot;
        $bejegyzes->save();
    }
}
