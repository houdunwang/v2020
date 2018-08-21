<?php

namespace App\Http\Controllers\Api;

class AuthController extends Controller
{
    public function __construct()
    {
        // 除login外都需要验证
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    //登录获取token
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return $this->response->errorUnauthorized('帐号或密码错误');
        }

        return $this->respondWithToken($token);
    }

    //获取用户资料
    public function me()
    {
        return response()->json(auth('api')->user());
    }

    //销毁token
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    //刷新token
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    //响应token
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth('api')->factory()->getTTL() * 60,
        ]);
    }
}
