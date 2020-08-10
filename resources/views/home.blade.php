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
                        <div class="col-md-4 mb-4">
                            <div class="card bg-light text-dark"> 
                                <img class="card-img-top" src="{{asset('Image/3439.png')}}" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">John Doe</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
