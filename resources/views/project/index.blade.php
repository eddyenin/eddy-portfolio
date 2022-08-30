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
        </section>
    </div>
    
@endsection