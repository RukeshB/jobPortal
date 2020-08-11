@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Post') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updatepost',['id'=>$post->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="jobprovider_id" type="hidden" class="form-control @error('jobprovider_id') is-invalid @enderror" name="jobprovider_id" value={{Auth::user()->id}} required autocomplete="jobprovider_id">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="heading" class="col-md-4 col-form-label text-md-right">{{ __('Heading') }}</label>

                            <div class="col-md-6">
                                <input id="heading" type="text" class="form-control @error('heading') is-invalid @enderror" name="heading" value="{{ $post->heading }}" required autocomplete="heading">

                                @error('heading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="post" class="col-md-4 col-form-label text-md-right">{{ __('Post') }}</label>

                            <div class="col-md-6">
                                <input id="post" type="text" class="form-control @error('post') is-invalid @enderror" name="post" value="{{ $post->post }}" required autocomplete="post">

                                @error('post')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="salary" class="col-md-4 col-form-label text-md-right">{{ __('Salary') }}</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $post->salary }}" required autocomplete="salary">

                                @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Experience (in Year)') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ $post->experience }}" required autocomplete="experience">

                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_of_vacant_position" class="col-md-4 col-form-label text-md-right">{{ __('No of vacant position') }}</label>

                            <div class="col-md-6">
                                <input id="no_of_vacant_position" type="text" class="form-control @error('no_of_vacant_position') is-invalid @enderror" name="no_of_vacant_position" value="{{ $post->no_of_vacant_position }}" required autocomplete="no_of_vacant_position">

                                @error('no_of_vacant_position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="qualification" class="col-md-4 col-form-label text-md-right">{{ __('Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control @error('qualification') is-invalid @enderror" name="qualification" value="{{ $post->qualification }}" required autocomplete="qualification">

                                @error('qualification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection