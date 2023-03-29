@extends('teacher.master')
@section('title')
    Add Training
@endsection
@section('body')
    <div class="container">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Training Create Form</h3></div>
                                    <div class="card-body">
                                        <h5 class="text-center text-primary">{{Session::get('message')}}</h5>
                                        <form action="{{route('create.training')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input name="title" class="form-control" id="inputName" type="text" placeholder="Training Title" />
                                                <label for="inputName">Training Title</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="description" class="form-control" id="inputAddress1" type="text" placeholder="Short Description"></textarea>
                                                <label for="inputAddress1">Short Description</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="date" class="form-control" id="inputEmail" type="date" placeholder="Starting Date" />
                                                <label for="inputEmail">Starting Date</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="price" class="form-control" id="inputPassword" type="number" placeholder="Price" />
                                                <label for="inputPassword">Price</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="long_description" class="form-control" id="inputAddress" type="text" placeholder="Long Description"></textarea>
                                                <label for="inputAddress">Long Description</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="image" class="form-control" id="inputImage" type="file" placeholder="Image" />
                                                <label for="inputImage">Image</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" >Create Teacher</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection