<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        return view('teacher.training.index', ['categories' => Category::where('status', 1)->get()]);
    }
}
