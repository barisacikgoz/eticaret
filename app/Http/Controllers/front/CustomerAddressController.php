<?php

namespace App\Http\Controllers\front;

use App\Models\Customer;
use App\Models\customerAddress;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerAddressController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function addressDelete(Request $request)
    {
        $id = $request->post('address_id');
        $address = CustomerAddress::find($id);
        $address->delete();
    }

    public function store(Request $request)
    {
//        $data = $request->validate([
//            'title' => 'required|min:2',
//            'city' => 'required|min:2',
//            'district' => 'required|min:2',
//            'post_code' => 'required|integer|min:5|max:5',
//            'address' => 'required|min:40',
//        ]);

        $data = $request->except('_token');
        $data['customer_id'] = Auth::guard('customer')->id();
        CustomerAddress::create($data);

        toastr()->success('Yeni teslimat adresiniz oluşturuldu.', 'Başarılı');
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
