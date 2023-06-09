@extends('admin.master')

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">All Teacher Information</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Teacher Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->email}}</td>
                                    <td>{{$teacher->mobile}}</td>
                                    <td><img src="{{asset($teacher->image)}}" alt="{{$teacher->title}}" height="50" width="70"/></td>
                                    <td>
                                        <a href="{{route('edit.teacher', ['id' => $teacher->id])}}" class="btn btn-outline-success">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{route('delete.teacher', ['id' => $teacher->id])}}" method="POST" onsubmit="myFunction()">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-danger">
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
    </div>
    <script>
        function myFunction() {
            alert("Are you sure to delete..???");
        }
    </script>
@endsection

