@extends('layouts.partials')

@section('content')
    <div class="container">
        <section class="profile">   
            <div class="row">
                <div class="col-md-12">
                   
                   @if (isset($profile))
                        <div class="profile-img">
                            <img src="{{ asset('images/'. $profile->image)}}" alt="img" target="_blank">
                        </div>
                        <div class="profile-name">
                            <h5>{{ $profile->name }}.</h5>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i> {{ $profile->email }}</p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> +234-{{ $profile->phone }}</p>
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i>   Lagos, Nigeria</p>
                            <a href="{{ asset('docs/'. $profile->resume)}}" class="btn btn-md btn-secondary" download>Download Resume <i class="fa fa-download" aria-hidden="true"></i></a>
                        </div> 
                    @else
                        <div class="profile-img">
                            <img src="{{ asset('images/usr-profile.png')}}" alt="img" target="_blank">
                        </div>
                        <div class="profile-name">
                            <h5>No profile Information</h5>
                            
                        </div> 
                   @endif
                    
                </div>
            </div>

        </section>
        <hr>

        <section class="bio">
            <p>An enthusiastic software developer with a positive and challenging mindset to achieve set goals. Experienced Software Engineer with a demonstrated history of working in the computer software industry. A well-seasoned software developer with a passion for developing innovative programs that help with the efficiency and effectiveness of organizational success.</p>
        </section>
        <hr>

        <section class="social-media">
            <a href="https://twitter.com/eddy_rexy" class="btn btn-md"><i class="fa fa-twitter-square"></i> Twitter</a>
            <a href="https://linkedin.com/in/edidiong-daniel" class="btn btn-md"><i class="fa fa-linkedin"></i> LinkedIn</a>
            <a href="https://github.com/eddyenin" class="btn btn-md"><i class="fa fa-github-square"></i> Github</a>
        </section>
        <hr>

        <section class="skills">
            <h4>Tech stack/skills</h4>
            <div class="row">
                <div class="col-md-6">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>Javascript</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Codeigniter</li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <ul>
                        <li>Git, Github</li>
                        <li>MySQL</li>
                        <li>Problem solving</li>
                        <li>Excellent communication</li>
                        <li>Team collaboration</li>
                    </ul>

                </div>

            </div>
        </section>
        <hr>
        <section>
            <div class="project-page">
                <a href="{{ url('/projects') }}" class="btn btn-md"><h5>PROJECTS <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h5></a>
            </div>
        </section>
        <hr>

       
    </div>
@endsection