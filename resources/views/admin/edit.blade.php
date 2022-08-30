@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('inc.messages')
                <div class="card">
                    <div class="card-header">
                        <h3>Edit project</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/home/update/'. $project->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" value="{{ $project->title }}" placeholder="Title" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="link" class="form-control" value="{{ $project->link }}" placeholder="Project link" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" placeholder="Image" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <a href="{{ url('/home/projects')}}" class="btn btn-md btn-secondary">Back</a>
                                <button class="btn btn-md btn-secondary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

@endsection