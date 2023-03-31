<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherAuthController extends Controller
{
    private $teacher;

    public function index()
    {
        return view('teacher.login.index');
    }
    public function login(Request $request)
    {
        $this->teacher = Teacher::where('email', $request->email)->first();


        if ($this->teacher)
        {
            if (password_verify($request->password, $this->teacher->password))
            {
                Session::put('teacher_id', $this->teacher->id);
                Session::put('teacher_name', $this->teacher->name);
                Session::put('teacher_email', $this->teacher->email);
                Session::put('teacher_mobile', $this->teacher->mobile);
                Session::put('teacher_address', $this->teacher->address);
                Session::put('teacher_image', $this->teacher->image);

                return redirect('/teacher/dashboard');
            }
            else
            {
                return redirect('/teacher/login')->with('message', 'Sorry..your password is not valid.');
            }
        }
        else
        {
            return redirect('/teacher/login')->with('message', 'Sorry..your email is not valid.');
        }
    }

    public function dashboard()
    {
        return view('teacher.dashboard.index');
    }
    public function profile_index()
    {
        return view('teacher.profile.index');
    }
    public function logout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');
        Session::forget('teacher_email');
        Session::forget('teacher_mobile');
        Session::forget('teacher_address');
        Session::forget('teacher_image');

        return redirect('/teacher/login');
    }
}
