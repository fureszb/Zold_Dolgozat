<?php

namespace App\Http\Controllers;

use App\Models\Bejegyzesek;
use App\Models\Osztaly;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    public function show($id){
        $bejegyzesek = Bejegyzesek::all();
        $osztaly = Osztaly::with(['bejegyzesek'])->find($id);
        return response()->json(compact('osztaly','bejegyzesek'));
    }
}
