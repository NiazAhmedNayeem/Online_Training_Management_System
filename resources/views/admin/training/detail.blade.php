@extends('teacher.master')

@section('title')
    Training Detail
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Training Detail</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Training Category</th>
                                <td>{{$training->category->name}}</td>
                            </tr>
                            <tr>
                                <th>Teacher Name</th>
                                <td>{{$training->teacher->name.'('.$training->teacher->mobile.')'}}</td>
                            </tr>
                            <tr>
                                <th>Training Name</th>
                                <td>{{$training->title}}</td>
                            </tr>
                            <tr>
                                <th>Starting Date</th>
                                <td>{{$training->date}}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{$training->price}}/- Tk</td>
                            </tr>
                            <tr>
                                <th>Training Objective</th>
                                <td>{{$training->short_description}}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{$training->long_description}}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="{{asset($training->image)}}" width="250" height="150"/></td>
                            </tr>
                        </table>
                        <div>
                            <form action="{{route('training.delete', ['id' => $training->id])}}" method="POST" onsubmit="myFunction()">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            alert("Are you sure to delete..???");
        }
    </script>
@endsection






