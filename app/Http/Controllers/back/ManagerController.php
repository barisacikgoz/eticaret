<?php

namespace App\Http\Controllers\back;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{

    public function index()
    {
        $managers = Manager::all();
        return view('back.managers.managers.index', compact('managers'));
    }

    public function create()
    {
        return view('back.managers.managers.create');
    }

    public function store(Request $request)
    {
        $managers = $request->except('_token', 'manager_password');
        $managers['manager_password'] = Hash::make($request->post('manage_password'));
        $managers = Manager::create($managers);

        toastr()->success('Yönetici Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.manager.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $manager = Manager::find($id);
        return view('back.managers.managers.edit', compact('manager'));
    }

    public function update(Request $request, $id)
    {
        $manager = $request->except('_method', '_token');
        Manager::where('id', $id)->update($manager);

        toastr()->success('Yönetici Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.manager.index');
    }

    public function destroy($id)
    {
        $manager = Manager::where('id', $id);
        $manager->delete();

        toastr()->success('Yönetici Silme İşlemi Başarılı');
        return redirect()->back();
    }
}
