<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class AdminTrainingController extends Controller
{
    public function index()
    {
        return view('admin.training.index', ['trainings' => Training::orderBy('id', 'desc')->get()]);
    }


    public function statusUpdate($id)
    {
        return redirect('/admin-training')->with('message', Training::trainingStatus($id));
    }
}