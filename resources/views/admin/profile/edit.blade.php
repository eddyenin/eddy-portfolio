@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('inc.messages')
                <div class="card">
                    <div class="card-header">
                        <h3>Edit profile</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/admin/update/'. $profile->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <input type="text" name="fname" class="form-control" placeholder="Full name" value="{{ $profile->name
                                }}" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ $profile->email }}" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="phone" name="phone" class="form-control" placeholder="Phone Number" value="{{ $profile->phone }}" id="">
                            </div>
                            {{-- <br> --}}
                            {{-- <div class="form-group">
                                <input type="file" name="image" class="form-control"  value="{{ $profile->image }}" id="">
                            </div> --}}
                            {{-- <br> --}}
                            {{-- <div class="form-group">
                                <label for="">Resume</label>
                                <input type="file" name="resume" class="form-control" value="{{ $profile->resume }}" id="">
                            </div> --}}
                            <br>
                            <div class="form-group">
                                <textarea type="text" name="bio" rows="5" cols="3" class="form-control" placeholder="bio" id="">{{ $profile->bio }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-md btn-secondary" type="submit">submit</button>
                                <a href="{{ url('/admin') }}" class="btn btn-md btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

@endsection