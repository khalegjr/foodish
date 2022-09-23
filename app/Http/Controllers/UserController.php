<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function store(StoreUserRequest $request) {
        try {
            $user = User::create($request->all());

            return response()->json([
                'data' => [
                    'msg' => 'Usuário cadastrado com sucesso!'
                ]
            ], 201);
        } catch (\Exception $e) {
            if(config('app.debug')) {
                return response()->json(['data' => ['error' => $e->getMessage(), 'code' => 1010]], 500);
            }

            return response()->json(['data' => ['error' => "Houve um erro ao realizar a operação de criação", 'code' => 1010]], 500);
        }
    }
}
