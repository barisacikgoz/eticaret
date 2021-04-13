<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('back.auth.login');
    }

    public function loginPost(Request $request)
    {
        $crediantals = ['manager_email' => $request->post('email'), 'manager_password' => $request->post('password')];
        $manager = Manager::where($crediantals)->first();

        if ($manager) {
            \auth()->guard("manager")->loginUsingId($manager->id);
            //\auth()->guard("manager")->setUser($manager);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors("Email or Password wrong!");
        }
    }

    public function logout()
    {
        \auth()->guard("manager")->logout();
        return redirect()->route('login');
    }
}
