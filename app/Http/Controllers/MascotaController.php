<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index']);
    }

    public function index()
    {
        return Mascota::paginate(10);
    }

    public function store(Request $request)
    {
        $mascota = Mascota::create($request->all());
        return response()->json($mascota, 201);
    }

    public function show(Mascota $mascota)
    {
        return $mascota;
    }

    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->all());
        return response()->json($mascota);
    }

    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return response()->json(null, 204);
    }
}
