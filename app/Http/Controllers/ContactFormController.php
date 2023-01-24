<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
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
        $contacts=Contact::all();
        return view('pages.contact.index',compact('contacts'));
    }

    public function create(){
        return view('pages.contact.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'number' => 'required|string',
            'message'=>'required|string',
        ]);

        $contacts = new Contact();
        $contacts->name=$request->name;
        $contacts->email=$request->email;
        $contacts->number=$request->number;
        $contacts->message=$request->message;


        $contacts->save();

        return redirect()->route('home','/#contact')->with('success', 'Your message sent Successfully!');

    }
}
