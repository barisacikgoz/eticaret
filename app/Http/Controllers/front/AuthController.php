<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        $contact = Contact::find(1);

        $user = Customer::where('id', Auth::guard('customer')->id())->first();
        return view('front.user_login.index', compact('contact', 'user'));
    }

    public function loginPost(Request $request){
        if (Auth::guard('customer')->attempt(['email' => $request->post('email'), 'password' => $request->post('password')])){
            return redirect()->route('homepage.index');
        }else{
            return redirect()->back()->withErrors("Email or Password wrong!");
        }
    }

    public function profile(){
        $contact = Contact::find(1);

        $user = Customer::where('id', Auth::guard('customer')->id())->first();
        return view('front.user_login.profile', compact('contact', 'user'));
    }

    public function logout(){
        Auth::guard('customer')->logout();
        return redirect()->route('user.login');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $customer = $request->except('_token', 'password', 'profile_image');
        $customer['password'] = Hash::make($request->post('password'));
        Customer::create($customer);

        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
