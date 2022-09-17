@extends('layouts.partials')

@section('content')
    <div class="container-fluid">
        <section class="projects">
            <div class="head-in">
                <h3>Projects</h3>
                <p>Sample of some projects featured in and developed by myself</p>
            </div>
            @if (!empty($projects))
            <div class="row">
                @foreach ($projects as $project )
                <div class="col-md-4">
                   
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('/images/' . $project->image)}}" alt="">
                        </div>
                        <div class="card-footer">
                            <h4>{{ ucfirst($project->title) }}</h4>
                            <span><a href="{{ $project->link }}">{{ $project->link }}</a></span>
                        </div>
                    </div>
                   
                </div>
                @endforeach
            </div>
            @else
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <p>No projects yet</p>
                            <a href="{{ url('/') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </section>
    </div>
    
@endsection