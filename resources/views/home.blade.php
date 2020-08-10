@extends('layouts.app')

@section('content')
<div class="container bg-dark text-white">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </div>
            </div>
                    

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach ($post as $p)
                        
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-dark"> 
                                <img class="card-img-top" src="{{asset('Image/3439.png')}}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{$p->heading}}</h4>
                                    <p class="card-text">
                                        experience : {{$p->experience}} Year<br>
                                        salary : {{$p->salary}}<br>
                                        Contact : {{$p->users->phone}}<br>
                                        Email : {{$p->users->email}}<br>
                                        Address : {{$p->users->address}}
                                    </p>
                                    <a href="#" class="btn btn-primary">View More</a>
                                    <a href="#" class="btn btn-primary">Apply Now</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
