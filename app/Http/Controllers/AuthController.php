<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;



class AuthController extends Controller
{

    private $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }


    public function login()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        return $this->authService->register($request);
    }

    public function postLogin(LoginRequest $request)
    {
        return $this->authService->postLogin($request);
    }

    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }
}
