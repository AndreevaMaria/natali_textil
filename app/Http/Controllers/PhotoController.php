<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function addPhotos()
    {
        $input = Request::all();

        $idFabric = $input['idFabric'];
        $files = $input['imagepath'];
        
        $fabric = Fabric::find($idFabric);

        if ($files !== null) {
            foreach($files as $file) {
                $original_name = $idFabric.'.'.$file->getClientOriginalExtension();
               // $file->move(public_path().'/images', $original_name);
                Storage::disk('images')->putFileAs($original_name);
                Photo::create ([
                    'idFabric' => $idFabric,
                    'imagepath' => 'images/'.$original_name
                ]);
            }
        }
        return 'Загрузка прошла успешно!';
    }

    public function deletePhoto()
    {
        $input = Request::all();
        $path = $input['imagepath'];

        Storage::disk('images')->delete($path);
        DB::table('photos')->where('imagepath', '=', 'images/'.$path)->delete();

        return response()->json('', 200);
    }
}