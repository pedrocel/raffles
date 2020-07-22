<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\LoginRequest;
class TokensController extends Controller
{
    public function login(Request $request){

        //200 oara casis de sucesso,
        //400 para casos de erros, como email invalido,
        //404 para usuario não encontrado
        //401 para usuario não autorizado
        //403 para acesso proibido
        $credentials = $request->only('email', 'password');


        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email Invalido!',
            'email.email' => 'Email Invalido!',
            'password.required' => 'Senha Invalida!'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'message' => 'Falta validação',
                'errors' => $validator->errors()
            ], 400);
        }

        $token = JWTAuth::attempt($credentials);
        $id_usuario = User::where('email', $credentials['email'])->get()->first();

        if($token){
            return response()->json([
                    'success' => true,
                    'user_id' => $id_usuario->id,
                    'token' => $token,
                ], 200);
            }else{
            return response()->json([
                'success' => false,
                'message' => 'Dados Incorretos',
            ], 404);
        }
    }


    public function logout(){
        $token = JWTAuth::getToken();

        try{
            JWTAuth::invalidate($token);
            return response()->json([
                'success' => true,
                'message' => 'Logout Feito com Sucesso',
                'status' => 200
            ], 200);
        } catch (JWTException $ex){
            return response()->json([
                'success' => false,
                'message' => 'Falha de Logout',
            ], 422);
        }
    }
}
