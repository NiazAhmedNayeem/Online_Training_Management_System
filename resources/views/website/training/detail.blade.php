
@extends('website.master')
@section('title')
    Training Detail
@endsection
@section('body')
    {{--section-1 start--}}
    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body shadow border-0 mb-3">
                        <img src="{{asset($training->image)}}" class="" height="400"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow border-0 mb-3">
                        <div class="card-header bg-transparent text-center">
                            <h3>Training details</h3>
                        </div>
                        <div class="card-body">
                            <div style="height: 100px;">
                                <p>{{$training->short_description}}</p>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"><h6>Training Name :</h6></label>
                                <div class="col-md-9">
                                    <h6>{{$training->title}}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"><h6>Category Name :</h6></label>
                                <div class="col-md-9">
                                    <h6>{{$training->category->name}}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"><h6>Teacher Name :</h6></label>
                                <div class="col-md-9">
                                    <h6>{{$training->teacher->name}}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"><h6>Starting Date :</h6></label>
                                <div class="col-md-9">
                                    <h6>{{$training->date}}</h6>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"><h6>Training fee :</h6></label>
                                <div class="col-md-9">
                                    <h6>TK. {{$training->price}}/=</h6>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <a href="{{route('training.enroll', ['id' => $training->id])}}" class="btn btn-info shadow">Enroll Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 py-5">
                <div class="card card-body border-0 shadow">
                    <h2 class="text-center">Course Description</h2>
                    <hr/>
                    <div id="detail" class="">{!! $training->long_description !!}</div>
                </div>
            </div>
        </div>
    </section>
    {{--section-1 end--}}
@endsection
