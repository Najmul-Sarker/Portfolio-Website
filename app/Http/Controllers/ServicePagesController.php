<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicePagesController extends Controller
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
        $services = Service::all();
        return view('pages.services.index', compact('services'));

    }


    public function create(){
        return view('pages.services.create');
    }

    public function store(Request $request){
        $request->validate([
            'icon'=> 'required|string',
            'title'=> 'required|string',
            'description'=> 'required|string',
        ]);

        $data=new Service();
        $data->icon=$request->icon;
        $data->title=$request->title;
        $data->description=$request->description;

        $data->save();

        return redirect(route('admin.services.create'))->with('success','New Service Created successfully!');

    }

    public function edit(Service $service){
        return view('pages.services.edit',compact('service'));
    }

    public function update(Request $request,Service $service){
        $request->validate([
            'icon'=> 'required|string',
            'title'=> 'required|string',
            'description'=> 'required|string',
        ]);

        
        $service ->icon=$request->icon;
        $service ->title=$request->title;
        $service ->description=$request->description;

        $service ->save();

        return redirect(route('admin.services.index'))->with('success','Service Updatet successfully!');

    }

    public function delete(Service $service){
        $service->delete();
        return redirect(route('admin.services.index'))->with('success','Service Deleted Successfully!');
    }
}
