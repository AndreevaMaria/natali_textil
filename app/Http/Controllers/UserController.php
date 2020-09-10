<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Operation getUserList
     *
     * Получить список юзеров.
     *
     * @param int $idUser  (required)
     *
     * @return Http response
     */
    public function getUserList()
    {
        $input = Request::all();

        return User::all();
    }

    public function getUserById($idUser)
    {
        return User::find($idUser);
    }
    /**
     
    /**
     * Operation deleteUser
     *
     * Удалить юзера.
     *
     * @param int $idUser  (required)
     * 
     * @return Http response
     */
    public function deleteUser($idUser)
    {
        $input = Request::all();

        $user = User::find($idUser)->delete();

        return response()->json('', 200);

    }
    /**
     * Operation updateMachinery
     *
     * Обновить данные юзера.
     *
     * @param int $idUser  (required)
     *
     * @return Http response
     */
    public function updateUser($idUser)
    {
        $input = Request::all();

        $user = User::find($idUser)->update($input);

        return response()->json($user, 200);
    }
}
