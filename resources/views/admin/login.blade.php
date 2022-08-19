@extends('layouts.partials')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="" placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-md" type="submit">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection