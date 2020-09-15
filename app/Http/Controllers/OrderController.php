<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Operation getOrderList
     *
     * Список заказов.
     *
     *
     * @return Collection|static[]
     */
    public function getOrderList()
    {
        $input = Request::all();

        return Order::all();
    }

    /**
     * Operation storeOrder
     *
     * Сохранить заказ
     *
     *
     * @return Http response
     */
    public function storeOrder()
    {
        $input = Request::all();

        return response()->json(Order::create($input), 201);
    }

    /**
     * Operation deleteOrder
     *
     * Удалить заказ.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function deleteOrder($id)
    {
        $input = Request::all();

        return response()->json(Order::find($id)->delete(), 200);
    }

    /**
     * Operation getOrder
     *
     * Получить заказ.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function getOrder($id)
    {
        $input = Request::all();

        return response()->json(Order::find($id), 200);
    }

    /**
     * Operation updateOrder
     *
     * Обновить заказ.
     *
     * @param int $id (required)
     *
     * @return Http response
     */
    public function updateOrder($id)
    {
        $input = Request::all();

        return response()->json(Order::find($id)->update($input), 200);
    }
}
