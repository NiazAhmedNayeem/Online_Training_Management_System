@extends('admin.master')
@section('title')

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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Teacher Register Form</h3></div>
                                    <div class="card-body">
                                        <h5 class="text-center text-primary">{{Session::get('message')}}</h5>
                                        <form action="{{route('update.teacher', ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input name="name" class="form-control" value="{{$teacher->name}}" id="inputName" type="text" placeholder="Full name" />
                                                <label for="inputName">Teacher Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="email" class="form-control" value="{{$teacher->email}}" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="mobile" class="form-control" value="{{$teacher->mobile}}" id="inputPassword" type="number" placeholder="Mobile" />
                                                <label for="inputPassword">Mobile</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea name="address" class="form-control" id="inputAddress" type="text" placeholder="Address">{{$teacher->address}}</textarea>
                                                <label for="inputAddress">Address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input name="image" class="form-control" id="inputImage" type="file" placeholder="Image" />
                                                <label for="inputImage">Image</label>
                                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="130"/>
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

