@extends('teacher.master')

@section('title')
    My Profile
@endsection

@section('body')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">My Profile Detail</h4>
                        <p class="card-title-desc">{{Session::get('message')}}</p>
                        <img src="{{'/'}}{{Session::get('teacher_image')}}" class="text-center" width="250" height="300"/>
                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <tr>
                                <th>Name</th>
                                <td>{{Session::get('teacher_name')}}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{Session::get('teacher_mobile')}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{Session::get('teacher_email')}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{Session::get('teacher_address')}}</td>
                            </tr>
                        </table>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
