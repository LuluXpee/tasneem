<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deatil;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $deatils = Deatil::all();
        return view('admin.About.index', compact('deatils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.About.create');
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
            'About_titleEN' => 'required' ,
            'About_titleAR' => 'required' ,
            'About_bodyEN' => 'required' ,
            'About_bodyAR' => 'required' ,
            'image'   => 'required' ,

        ]);
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = rand() . '_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'), $new_img_name);


        Deatil::create([

                        'About_titleEN' => $request->About_titleEN ,
                        'About_titleAR' => $request->About_titleAR ,
                        'About_bodyEN' => $request->About_bodyEN,
                         'About_bodyAR'  => $request->About_bodyAR ,
                        'image'   => $new_img_name


        ]);
        return redirect()->route('admin.about.index');
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
        $deatil = Deatil::find($id);
        return view('admin.About.edit', compact('deatil'));

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
            'About_titleEN' => 'required' ,
            'About_titleAR' => 'required' ,
            'About_bodyEN' => 'required' ,
            'About_bodyAR' => 'required' ,
            'image'   => 'required' ,

        ]);
        $deatil = Deatil::find($id);

        $new_name = $deatil->image;
        if($request->has('image')) {
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads'), $new_name);
        }

        $deatil = $deatil->update([
            'About_titleEN' => $request->About_titleEN ,
            'About_titleAR' => $request->About_titleAR ,
            'About_bodyEN' => $request->About_bodyEN,
             'About_bodyAR'  => $request->About_bodyAR ,
            'image' => $new_name,

        ]);
        return redirect()->route('admin.about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deatil = Deatil::find($id);

        unlink(public_path('uploads/'.$deatil->image));
        $deatil->delete();
        return redirect()->back();
    }
}
