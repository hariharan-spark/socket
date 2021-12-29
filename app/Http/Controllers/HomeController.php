<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->middleware('auth');
        $this->user=$user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id       =Auth::id();
        $getUser  =$this->user->where('id','!=',$id)->get();
        return view('home',compact('getUser'));
    }
    /**
     * Show the application chat.
     *
     * @return blade file
     */
    public function chatWithFriend($id)
    {
        return view('welcome');
    }
}
