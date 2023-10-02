<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;    

class DadosController extends Controller
{
    public function enviarDados(Request $request)
    {
        $url = 'https://127.0.0.1:8000';
        
        try {
            $response = Http::post($url, [
                'titulo' => $request->titulo,
                'subtitulo' => $request->subtitulo,
                'backgroundimg' => $request->id_image,
            ]);
            
            return response()->json(['Sucesso' => $response->json()]);
        } catch (\Exception $e) {
            return response()->json(['Erro' => $e->getMessage()]);
        }
    }
    
}