@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('/home/create')}}" class="btn btn-md btn-secondary">Add project</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                
                            </thead>
        
                            <tbody>
                                @foreach ($projects as $project )
                                <tr>
                                    <td>{{ $project->title }}</td>
                                    <td><a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></td>
                                    <td>
                                        <img src="{{ asset('/images/' . $project->image )}}" width="100px" alt="">
                                    </td>
                                    <td>
                                        <a href="">edit</a>
                                        <a href="">delete</a>
            
                                    </td>
        
                                </tr>
                                @endforeach
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection