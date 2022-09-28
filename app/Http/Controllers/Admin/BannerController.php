<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.Banner.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'Banner_title1AR' => 'required',
            'Banner_title1EN' => 'required' ,
            'Banner_title2AR' => 'required',
            'Banner_title2EN' => 'required' ,
            'image' => ''

        ]);

        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_img_name);

        Slider::create([
            'Banner_title1AR'  => $request->Banner_title1AR,
            'Banner_title1EN'  =>$request->Banner_title1EN,
            'Banner_title2AR'  =>$request->Banner_title2AR,
            'Banner_title2EN'  =>$request->Banner_title2EN,
            'image'            =>$new_img_name,
        ]);

        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.Banner.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Banner_title1AR' => 'required',
            'Banner_title1EN' => 'required' ,
            'Banner_title2AR' => 'required',
            'Banner_title2EN' => 'required' ,
            'image' => ''

        ]);

        $slider = Slider::find($id);

        $new_name = $slider->image;
        if($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $slider=$slider->update([

            'Banner_title1AR' =>$request->Banner_title1AR,
            'Banner_title1EN'  =>$request->Banner_title1EN,
            'Banner_title2AR'  =>$request->Banner_title2AR,
            'Banner_title2EN'  =>$request->Banner_title2EN,
            'image'            =>$new_name,

        ]);
        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $slider = Slider::find($id);
    unlink(public_path('uploads/'.$slider->image));
    $slider->delete();
    return redirect()->back();
    }
}
