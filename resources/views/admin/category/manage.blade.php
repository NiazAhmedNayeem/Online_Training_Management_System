@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Category Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td><img src="{{asset($category->image)}}" alt="{{$category->name}}" height="50" width="70"/></td>
                                <td>
                                    <a href="{{route('edit.category', ['id' => $category->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route('delete.category', ['id' => $category->id])}}" method="POST" onsubmit="myFunction()">
                                        @csrf
                                        <button class="btn btn-outline-danger">
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

