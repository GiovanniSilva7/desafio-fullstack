<?php

namespace App\Http\Controllers;

use App\Models\FileContent;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FileFacade;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $uploadedFile = $request->file('file');
        $filename = $uploadedFile->getClientOriginalName();
        $base64 = base64_encode(FileFacade::get($uploadedFile));

        $fileModel = FileContent::create([
            'filename' => $filename,
            'imageType' => $request->imageType('imageType'),
            'base64' => $base64, // Adicionando o base64 ao modelo
        ]);

        return response()->json($fileModel);
    }
    public function show()
{
    if($documento = FileContent::first()){
        return view('dashboard', compact('documento'));
    }else{
        return view('dashboard', compact('documento'));
    }
}
}
