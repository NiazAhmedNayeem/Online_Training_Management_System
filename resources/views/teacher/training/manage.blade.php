@extends('teacher.master')
@section('title')
    Manage Training
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Training Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Stating Date</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trainings as $training)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$training->title}}</td>
                                <td>{{$training->price}}</td>
                                <td>{{$training->date}}</td>
                                <td><img src="{{asset($training->image)}}" alt="{{$training->title}}" height="50" width="70"/></td>
                                <td class="d-flex">
                                    <a href="{{route('detail.training', ['id' => $training->id])}}" class="btn btn-outline-success m-2">
                                        <i class="fa fa-book"></i>
                                    </a>
                                    <a href="{{route('edit.training', ['id' => $training->id])}}" class="btn btn-outline-success m-2">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('delete.training', ['id' => $training->id])}}" method="POST" onsubmit="myFunction()">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger m-2">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <script>
        function myFunction() {
            alert("Are you sure to delete..???");
        }
    </script>
@endsection


