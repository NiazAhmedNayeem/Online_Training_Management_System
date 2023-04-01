@extends('website.master')

@section('title')
    All Training
@endsection

@section('body')

    <!-- service -->
    <section class="section">
        <div class="container">
            <div class="row">

                <!-- service item -->
                @foreach($trainings as $training)
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card text-center">
                        <div class="card-img-wrapper overlay-rounded-top">
                            <img class="card-img-top rounded-0" src="{{asset($training->image)}}" alt="service-image">
                        </div>
                        <div class="card-body p-0">
                            <h4 class="card-title pt-3">{{$training->title}}</h4>
                            <h4 class="card-title pt-3">Price: {{$training->price}}/- Tk</h4>
                            <p class="card-text mx-2 mb-0">{{$training->short_description}}</p>
                            <a href="service-single.html" class="btn btn-secondary translateY-25">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- /service -->

@endsection
