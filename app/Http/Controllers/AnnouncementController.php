<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Announcement;
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
        $user = auth()->user();
        // dd(($user->announcement()->get()->toArray()));

        $announcements = Announcement::with('user')->get();
        return view('pages.home', compact('announcements'));
    }

    protected function create(array $data)
    {
        dd(1);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'     => 'required|min:2|max:10',
            'content'   => 'required'
        ]);


        $req = $request->all();
        $user = auth()->user();
        $announcement = $user->announcement()->save(new Announcement($req));
        return redirect()->to('/')->with('success','Data created successfully!');
    }
}
