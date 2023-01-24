<?php

namespace App\Http\Controllers;

use App\Models\Main;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class MainPagesController extends Controller
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

    public function dashboard(){
        return view('pages.dashboard');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::first();
        return view('pages.main',compact('main'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'sub_title' => 'required|string'
        ]);

        $main = Main::first();
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;

        if($request->hasfile('bc_img')){
            $destination = 'storage/img/'.$main->bc_img;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('bc_img');
            //$extension = $file->getClientOriginalExtension();
            $fileName = 'bc_img'.'.'.$file->getClientOriginalExtension();
            $file->move('storage/img/',$fileName);
            $main->bc_img ='storage/img/'.$fileName;

        }

        if($request->hasfile('resume')){
            $destination = 'storage/pdf/'.$main->resume;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('resume');
            //$extension = $file->getClientOriginalExtension();
            $fileName = 'resume'.'.'.$file->getClientOriginalExtension();
            $file->move('storage/pdf/',$fileName);
            $main->resume ='storage/pdf/'. $fileName;

        }

        // if($request->file('bc_img')){
            
        //     $image_name = Str::uuid().'.'.$request->bc_img->extension();
        //     Image::make($request->bc_img)->save(public_path('storage/img/'.$image_name));

        // }
        // if($request->file('resume')){
            
        //     $request->file('resume')->store('pdf');

        // }
        // if($request->file('resume')){
        //     $pdf_file = $request>file('bc_img');
        //     $pdf_file->storeAs('public/pdf/','resume.'. $pdf_file->getClientOriginalExtension());
        //     $main->resume = 'storage/pdf/resume.'. $pdf_file->getClientOriginalExtension();

        // }
        $main->update();
        return redirect()->route('admin.main')->with('success','Main Page data updated successfully!');

        return 'abc';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
