<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('teacher.training.index', ['categories' => Category::where('status', 1)->get()]);
    }
    public function create(Request $request)
    {
        Training::createTraining($request);
        return redirect('/teacher/training')->with('message', 'Training create successfully.');
    }
    public function manage()
    {
        return view('teacher.training.manage');
    }
}
