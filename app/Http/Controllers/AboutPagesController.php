<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutPagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $abouts = About::all();
        return view('pages.abouts.index',compact('abouts'));
    }

    public function create(){
        return view('pages.abouts.create');
    }

    public function store(Request $request){
        $request->validate([
            'title1' => 'required|string',
            'title2' => 'required|string',
            'image' => 'required|image',
            'description'=>'required|string',
        ]);

        $abouts = new About;
        $abouts->title1=$request->title1;
        $abouts->title2=$request->title2;
        $abouts->image=$request->image;
        $abouts->description=$request->description;

        $image_file= $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $abouts->image = "storage/img/".$image_file->hashName();

        $abouts->save();

        return redirect(route('admin.abouts.create'))->with('success', 'New About Created Successfully!');

    }

    public function edit(About $about){
        return view('pages.abouts.edit',compact('about'));
    }

    public function update(Request $request,About $about){
        $request->validate([
            'title1' => 'required|string',
            'title2'=> 'required|string',
            'description'=>'required|string',
        ]);

        $about->title1=$request->title1;
        $about->title2=$request->title2;
        $about->description=$request->description;

        if($request->file('image')){
           
        $image_file= $request->file('image');
        Storage::putFile('public/img/', $image_file);
        $about->image = "storage/img/".$image_file->hashName(); 

       

        }

        $about->save();

        return redirect(route('admin.abouts.index'))->with('success','About Updated Successfully!');

    }

    public function delete(About $about){
        @unlink(public_path($about->image));
        $about->delete();
        return redirect(route('admin.abouts.index'))->with('success','About Deleted Successfully!');
    }
}
