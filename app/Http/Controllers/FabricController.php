<?php

namespace App\Http\Controllers;

use App\FabricsType;
use App\Fabric;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class FabricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Operation getFabricsList
     *
     * Список тканей по id категории.
     *
     *
     * @return Collection|static[]
     */
    public function getFabricsList($id)
    {
        $input = Request::all();

        return Fabric::where('idFabricsType', $id)->get();
    }
    /**
     * Operation getFabric
     *
     * Открыть ткань по id.
     *
     * @param int $id  (required)
     *
     * @return Http response
     */
    public function getFabric($idFabric)
    {
        $input = Request::all();

        return response()->json(Fabric::find($idFabric), 200);
    }
    /**
     * Operation postFabric
     *
     * Создать ткань.
     *
     * @param int $id  (required)
     *
     * @return Http response
     */
    public function postFabric($id)
    {
        $input = Request::all();

        //$fabricsType = FabricsType::find($id)->update($input);

        return response()->json(Fabric::create($input), 201);
    }
    /**
     * Operation deleteFabric
     *
     * Удалить ткань.
     *
     * @param int $id  (required)
     *
     * @return Http response
     */
    public function deleteFabric($id, $idFabric)
    {
        $input = Request::all();

        $fabric = Fabric::find($idFabric)->delete();
        //$fabricType = FabricType::find($id)->update($input);

        return response()->json('', 200);
    }
    /**
     * Operation updateMachineryGroup
     *
     * Обновить ткань.
     *
     * @param int $id  (required)
     *
     * @return Http response
     */
    public function updateFabric($id, $idFabric)
    {
        $input = Request::all();

        $fabric = Fabric::find($idFabric)->update($input);
       // $fabricType = FabricType::find($id)->update($input);

        return response()->json($fabric, 200)
    }

    public function search() {
        $search = $input['searchform'];
        $search = '%'.$search.'%';
        $fabrics = Fabric::where('title', 'like', $search)->get();
        return response()->json($fabrics, 201);
    }
}
