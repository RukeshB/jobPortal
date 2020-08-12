<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobPost;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = JobPost::all();
        return view('home',compact("post"));
    }

    public function viewpost()
    {
        $post = JobPost::all();
        $authUser = Auth::user();

        if($authUser->can('Approve post',$authUser)){
            return view('approvepost',compact("post"));
        }
        else{
            return 'restricted';
        }
    }

    public function approvepost(Request $request, $id)
    {
        $authUser = Auth::user();

        if($authUser->can('Approve post',$authUser)){
            $apost = JobPost::findOrFail($id);
            $apost->approve = "true";
            $apost->save();
            $post = JobPost::all();
            return view('approvepost',compact("post"));
        }
        else{
            return 'restricted';
        }
        
    }

    public function setting()
    {
        return view('setting');
    }

    public function change(Request $request)
    {

        $valied = $request->validate([

            'password_new' => ['required', 'max:255'],
            'password_confirm' => ['same:password_new'],
        ]);

        if(Hash::check(request('password_old'), Auth::user()->password) )
        {
            if(request('password_old')!=request('password_new'))
            {
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make(request('password_new'));
                $user->save();
                return redirect('/home');
            }
            else{
                return redirect()->route('setting')->with('message', 'old and new password is same');
            }
        }
        else{
            return redirect()->route('setting')->with('message', 'Invalid Old password');
        }
    }
}
