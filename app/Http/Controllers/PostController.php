<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\JobPost;

class PostController extends Controller
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'post' => ['required', 'string'],
            'salary' => ['required'],
            'experience'=>['required','string'],
            'no_of_vacant_position' => ['required'],
            'qualification' => ['required', 'string'],
            'heading'=>['required'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = JobPost::all();
        $authUser = Auth::user();

        if($authUser->can('edit post',$authUser) || $authUser->can('delete post',$authUser)){
            return view('mypost',compact("post"));
        }
        else{
            return 'restricted';
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authUser = Auth::user();

        if($authUser->can('create post',$authUser)){
            return view('jobpost');
        }
        else{
            return 'restricted';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();

        JobPost::create($request->all());
        return redirect("/home");
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
        $post = JobPost::find($id);
        $authUser = Auth::user();

        if($authUser->can('edit post',$authUser)){
            return view("editpost",compact("post"));
        }
        else{
            return 'restricted';
        }
        
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
        $post = JobPost::find($id);
        $this->validator($request->all())->validate();
        $post->update($request->all());
        $post;
        return \redirect("/home/mypost");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = JobPost::find($id);
        $authUser = Auth::user();

        if($authUser->can('delete post',$authUser)){
            $post->delete();
            $post;
            return \redirect("/home/mypost");
        }
        else{
            return 'restricted';
        }
        
    }
}
