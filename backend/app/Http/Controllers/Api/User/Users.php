<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Services\User\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function __construct(private UserService $userServe)
    {
        
    }

    public function index(): JsonResponse
    {
        $data = $this->userServe->all();

        if(!$data) {

            return response()->json([
                'data' => $data,
                'message' => 'Sem usuarios'
            ]);
        }

        return response()->json([
                'data' => $data,
                'message' => 'Sucesso'
            ]);
    }

    public function show($id): JsonResponse
    {
        $user = $this->userServe->find($id);

        if(!$user) {

            return response()->json([
                'data' => $user,
                'message' => 'Sem usuarios'
            ]);
        }

        return response()->json([
                'data' => $user,
                'message' => 'Sucesso'
            ]);

    }

    public function create(Request $request): JsonResponse
    {
        // Verificar se o e-mail já está em uso
        if (User::where('email', $request->email)->exists()) {
            return response()->json([
                'message' => 'O e-mail já está em uso.',
            ], 400);
        }

        // Verificar se o CPF já está em uso
        if (User::where('cpf', $request->cpf)->exists()) {
            return response()->json([
                'message' => 'O CPF já está em uso.',
            ], 400);
        }

        // Validar se a senha é uma string
        if (! is_string($request->password)) {
            return response()->json([
                'message' => 'A senha precisa ser uma string.',
            ], 400);
        }

        // Verificar se o papel existe
        $role = Role::where('name', $request->role)->first();
        if ($role == null) {
            return response()->json([
                'message' => 'O papel de usuário não foi encontrado.',
            ], 400);
        }

        // Criar o usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'number' => $request->number,
            'cpf' => $request->cpf,
            'cnpj' => $request->cnpj,
        ]);

        // Atribuir o papel ao usuário
        $user->roles()->attach($role->id); // Associa o papel ao usuário

        return response()->json([
            'message' => 'Usuário criado com sucesso!',
            'user' => $user->load('roles'),
        ], 201);
    }
}

// adcionaa tabela pivot role_user  no diagrama
