<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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
                $file->move(public_path().'/images', $original_name);
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

        DB::table('photos')->where('imagepath', '=', $input['imagepath'];)->delete();

        return response()->json('', 200);
    }
}