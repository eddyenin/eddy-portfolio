@extends('layouts.partials')

@section('content')
    <div class="container-fluid">
        <section class="projects">
            <div class="head-in">
                <h3>Projects</h3>
                <p>Sample of some projects featured in and developed by myself</p>
            </div>
           
            <div class="row">
                @foreach ($projects as $project ) 
                
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('/images/' . $project->image)}}"  alt="">
                            <hr>
                            <span>{{ ucfirst($project->title) }}</span><br>
                            <span><a href="{{ $project->link }}">{{ $project->link }}</a></span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <br>

            <a href="{{ url('/') }}" class="btn btn-secondary btn-sm">Back</a>
            
            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p>No projects yet</p>
                            <a href="{{ url('/') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div> --}}
         
        </section>
    </div>
    
@endsection