<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *  video_titleAR video_titleEN video_URL
     *
     */
    public function index()
    {
        $videos = Video::all();

        return view('admin.video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
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
            'video_titleEN' => 'required' ,
            'video_titleAR' => 'required' ,
            'video' => 'required' ,

        ]);

        $ex = $request->file('video')->getClientOriginalExtension();
        $new_video_name = rand() . '_' . time() . '.' . $ex;
        $request->file('video')->move(public_path('uploads'), $new_video_name);

        Video::create([

        'video_titleEN' => $request->video_titleEN ,
        'video_titleAR' => $request->video_titleAR ,
        'video'     => $request-> $new_video_name
        ]);

        return redirect()->route('admin.video.index');
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
        $video = Video::find($id);
        return view('admin.video.edit', compact('video'));
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
            'video_titleEN' => 'required' ,
            'video_titleAR' => 'required' ,
            'video' => 'required' ,

        ]);

        $video = Video::find($id);

        $new_name = $video->image;
        if($request->has('video')) {
            $ex = $request->file('video')->getClientOriginalExtension();
            $new_name = rand() . '_' . time() . '.' . $ex;
            $request->file('video')->move(public_path('uploads'), $new_name);
        }

        $video = $video->update([
            'video_titleEN' => $request->video_titleEN ,
            'video_titleAR' => $request->video_titleAR ,
            'video'     => $new_name


        ]);
        return redirect()->route('admin.video.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::find($id);
        File::delete(public_path('uploads/'.$video->video));

        $video->delete();
        return redirect()->back();


    }
}
