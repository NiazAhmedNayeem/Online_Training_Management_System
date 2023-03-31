@extends('website.master')

@section('title')
    Login/Registration
@endsection

@section('body')

    <!-- login-registration -->
    <section class="section">
        <div class="container bg-light shadow">
            <div class="row">
                <!-- form -->
                <div class="col-md-8 mx-auto">
                    <div class="p-5 rounded box-shadow">
                        <form action="#" class="row">
                            <div class="col-12">
                                <h3 class="text-center">Login-Registration Form</h3>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit" value="send">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

