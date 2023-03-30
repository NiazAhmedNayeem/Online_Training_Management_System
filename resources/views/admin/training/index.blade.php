@extends('admin.master')
@section('title')
    Training Manage
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
                            <th>Fee</th>
                            <th>Stating Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Offer Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trainings as $training)
                            <tr class="{{$training->status == 1 ? '' : 'bg-warning'}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$training->title}}</td>
                                <td>{{$training->date}}</td>
                                <td>{{$training->price}}</td>
                                <td><img src="{{asset($training->image)}}" alt="{{$training->title}}" height="50" width="70"/></td>
                                <td>{{$training->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>{{$training->offer_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td class="d-flex" >
                                    <a href="{{route('admin.training.detail', ['id' => $training->id])}}" class="btn btn-outline-success m-1">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('training.status', ['id' => $training->id])}}" class="btn btn-outline-info m-1">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                    <a href="" class="btn btn-outline-primary m-1">
                                        <i class="fa fa-book-dead"></i>
                                    </a>
                                    <form action="{{route('training.delete', ['id' => $training->id])}}" method="POST" onsubmit="myFunction()">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger m-1">
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
