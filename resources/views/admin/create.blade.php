@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h3>Create project</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/home/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="text" name="link" class="form-control" placeholder="Project link" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" name="image" class="form-control" placeholder="Image" id="">
                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-md btn-secondary" type="submit">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

@endsection