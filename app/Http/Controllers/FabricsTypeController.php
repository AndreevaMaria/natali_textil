<?php

namespace App\Http\Controllers;

use App\FabricsType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class FabricsTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Operation getFabricsTypeList
     *
     * Список категорий тканей.
     *
     *
     * @return Collection|static[]
     */
    public function getFabricsTypeList()
    {
        $input = Request::all();

        return FabricsType::with('FabricsList')->get();
    }

    /**
     * Operation postFabricsType
     *
     * Создать категорию тканей.
     *
     *
     * @return Http response
     */
    public function postFabricsType()
    {
        $input = Request::all();

        return response()->json(FabricsType::create($input), 201);
    }

    /**
     * Operation deleteFabricsType
     *
     * Удалить категорию тканей.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function deleteManufacture($id)
    {
        $input = Request::all();

        return response()->json(FabricsType::find($id)->delete(), 200);
    }

    /**
     * Operation getFabricsType
     *
     * Получить категорию тканей.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function getFabricsType($id)
    {
        $input = Request::all();

        return response()->json(FabricsType::find($id), 200);
    }

    /**
     * Operation updateFabricsType
     *
     * Обновить фабрику.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function updateFabricsType($id)
    {
        $input = Request::all();

        return response()->json(FabricsType::find($id)->update($input), 200);
    }
}
