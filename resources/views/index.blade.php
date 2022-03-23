@extends('main')
@section('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-sm-10  mt-4 mx-auto"></div>
        <div class="card shadow">
            <div class="card-header d-flex justify-content-around">
                <h2 class="text-center">Index Page</h2>
                <a href="{{route('save')}}" class="btn btn-success">Add Post</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col" colspan="1" >Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $item)                             
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$item->name}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->contact}}</td>
                          <td>
                              <a href="{{route('edit',$item->id)}}" class="btn btn-warning text-center">Edit</a>
                              <a href="{{route('delete',$item->id)}}" class="btn btn-danger text-center">Delete</a>

                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection