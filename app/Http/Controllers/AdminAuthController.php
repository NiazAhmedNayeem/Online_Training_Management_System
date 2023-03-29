<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }
    public function create(Request $request)
    {
        User::createAdmin($request);
        return redirect('/manage-admin')->with('message', 'Create Admin successfully.');
    }
    public function manage()
    {
        return view('admin.auth.manage', ['admins' => User::orderBy('id', 'desc')->get()]);
    }

}
