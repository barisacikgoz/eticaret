<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('back.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('back.slider.create');
    }

    public function store(Request $request)
    {
        $sliders = $request->except('_token', 'slider_image');

        if ($request->hasFile('slider_image')){
            $sliders['slider_image'] = $request->file('slider_image')->store('images');
        }
        Slider::create($sliders);

        toastr()->success('Slider Oluşturma İşlemi Başarılı.');
        return redirect()->route('admin.slider.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('back.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = $request->except('_method', '_token', 'slider_image');
        if ($request->hasFile('slider_image')){
            $slider["slider_image"] = $request->file("slider_image")->store("images");
        }
        Slider::where('id', $id)->update($slider);

        toastr()->success('Slider Güncelleme İşlemi Başarılı.');
        return redirect()->route('admin.slider.index');
    }

    public function destroy($id)
    {
        $slider = Slider::where('id', $id);
        $slider->delete();

        toastr()->success('Slider Silme İşlemi Başarıyla Gerçekleşti.');
        return redirect()->back();
    }
}
