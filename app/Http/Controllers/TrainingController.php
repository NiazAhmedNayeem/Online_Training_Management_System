<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Session;

class TrainingController extends Controller
{
    public function index()
    {
        return view('teacher.training.index', ['categories' => Category::where('status', 1)->get()]);
    }
    public function create(Request $request)
    {
        Training::createTraining($request);
        return redirect('/teacher/manage-training')->with('message', 'Training create successfully.');
    }
    public function manage()
    {
        return view('teacher.training.manage',['trainings' => Training::where('teacher_id', Session::get('teacher_id'))->orderBy('id', 'desc')->get()]);
    }
    public function edit($id)
    {
        return view('teacher.training.edit', ['training' => Training::find($id)], ['categories' => Category::where('status', 1)->get()]);
    }
    public function update(Request $request, $id)
    {
        Training::editTraining($request, $id);
        return redirect('/teacher/manage-training')->with('message', 'Training update successfully.');
    }
    public function delete($id)
    {
        Training::trainingDelete($id);
        return redirect('/teacher/manage-training')->with('message', 'Training delete successfully.');
    }
}
