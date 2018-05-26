<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AnnouncementRequest;

class AnnouncementController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    protected function index()
    {
        dd(1);
    }

    protected function create(array $data)
    {
        dd(1);
    }

    public function store(AnnouncementRequest $request)
    {
        dd($request->all());
        // if($request->hasfile('filename'))
        //  {
        //     $file = $request->file('filename');
        //     $name=time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/', $name);
        //  }
        // $passport= new Passport();
        // $passport->name=$request->get('name');
        // $passport->email=$request->get('email');
        // $passport->number=$request->get('number');
        // $date=date_create($request->get('date'));
        // $format = date_format($date,"Y-m-d");
        // $passport->date = strtotime($format);
        // $passport->office=$request->get('office');
        // $passport->filename=$name;
        // $passport->save();

        // return redirect('passports')->with('success', 'Information has been added');
    }
}
