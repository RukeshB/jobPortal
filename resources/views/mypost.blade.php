@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <table class="table table-striped bg-light text-dark">
                            <thead>
                              <tr>
                                {{--  <th scope="col">#</th>  --}}
                                <th scope="col">Heading</th>
                                <th scope="col">Post</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Experience</th>
                                <th scope="col">No of vacant position</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $post)
                                    @if($post->jobprovider_id == Auth::User()->id)
                                        <tr>
                                            {{--  <th scope="row">1</th>  --}}
                                            <td>{{$post->heading}}</td>
                                            <td>{{$post->post}}</td>
                                            <td>{{$post->salary}}</td>
                                            <td>{{$post->experience}}</td>
                                            <td>{{$post->no_of_vacant_position}}</td>
                                            <td>{{$post->qualification}}</td>
                                            <td><a href="{{ route('editpost',['id' => $post->id]) }}">Edit</a> <a href="{{ route('deletepost',['id' => $post->id]) }}">Delete</a></td>
                                        </tr>
                                        {{--  @else
                                            <tr>
                                                <td colspan="7">You Have not post any thing</td>
                                            </tr>  --}}
                                    @endif
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
