@extends('main')
@section('Form-Create')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-10 col-sm-12 mt-3 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                 <h2 class="text-center">Form-Create</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('create')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Full Name</label>
                          <input type="text" name="name" class="form-control" id="name"
                          placeholder="enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                            placeholder="enter your email">
                          </div>
                          <div class="mb-3">
                            <label for="contact" class="form-label">Contact Number</label>
                            <input type="text" name="contact" class="form-control" id="contact"
                            placeholder="enter your contact number">
                          </div>
                        <button type="submit"  name="submit" class="btn btn-primary float-end">Submit</button>
                      </form>
                </div>
            </div>
           
        </div>
    </div>
</div>
    
@endsection
    
