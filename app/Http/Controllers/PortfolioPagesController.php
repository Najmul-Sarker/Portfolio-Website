<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioPagesController extends Controller
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
        $portfolios = Portfolio::all();
        return view('pages.portfolios.index',compact('portfolios'));
    }

    public function create(){
        return view('pages.portfolios.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string',
            'sub_title'=> 'required|string',
            'big_image' => 'required|image',
            'small_image'=>'required|image',
            'description'=>'required|string',
            'client'=> 'required|string',
            'category'=>'required|string',
        ]);

        $portfolios = new Portfolio;
        $portfolios->title=$request->title;
        $portfolios->sub_title=$request->sub_title;
        $portfolios->big_image=$request->big_image;
        $portfolios->small_image=$request->small_image;
        $portfolios->description=$request->description;
        $portfolios->client=$request->client;
        $portfolios->category=$request->category;

        $big_file= $request->file('big_image');
        Storage::putFile('public/img/', $big_file);
        $portfolios->big_image = "storage/img/".$big_file->hashName();

        $small_file= $request->file('small_image');
        Storage::putFile('public/img/', $small_file);
        $portfolios->small_image = "storage/img/".$small_file->hashName();

        $portfolios->save();

        return redirect(route('admin.portfolios.create'))->with('success', 'New Portfolio Created Successfully!');

    }

    public function edit(Portfolio $portfolio){
        return view('pages.portfolios.edit',compact('portfolio'));
    }

    public function update(Request $request,Portfolio $portfolio){
        $request->validate([
            'title' => 'required|string',
            'sub_title'=> 'required|string',
            'description'=>'required|string',
            'client'=> 'required|string',
            'category'=>'required|string',
        ]);

        $portfolio->title=$request->title;
        $portfolio->sub_title=$request->sub_title;
        $portfolio->description=$request->description;
        $portfolio->client=$request->client;
        $portfolio->category=$request->category;

        if($request->file('big_image')){
           
        $big_file= $request->file('big_image');
        Storage::putFile('public/img/', $big_file);
        $portfolio->big_image = "storage/img/".$big_file->hashName(); 

        }elseif($request->file('small_image')){
            $small_file= $request->file('small_image');
            Storage::putFile('public/img/', $small_file);
            $portfolio->small_image = "storage/img/".$small_file->hashName();
        }
        

        $portfolio->save();

        return redirect(route('admin.portfolios.index'))->with('success','New Portfolio Updated Successfully!');

    }

    public function delete(Portfolio $portfolio){
        @unlink(public_path($portfolio->big_image));
        @unlink(public_path($portfolio->small_image));
        $portfolio->delete();
        return redirect(route('admin.portfolios.index'))->with('success','Portfolio Deleted Successfully!');
    }
}
