@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <a href="" class="btn btn-md btn-primary">Add project</a>
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
                                <tr>
                                    <td>Aflite apparel</td>
                                    <td>https://afliteapparel.com</td>
                                    <td>lorem</td>
                                    <td>
                                        <a href="">edit</a>
                                        <a href="">delete</a>
            
                                    </td>
        
                                </tr>
                               
                            </tbody>
                            
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection