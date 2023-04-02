<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
    public function about()
    {
        return view('website.about.index');
    }
    public function category($id)
    {
        return view('website.category.index', ['category' => Category::find($id)]);
    }
    public function training()
    {
        return view('website.training.index', ['trainings' => Training::where('status', 1)->orderBy('id', 'desc')->get()]);
    }
    public function trainingDetail($id)
    {
        return view('website.training.detail', ['training' => Training::find($id)]);
    }
    public function trainingEnroll()
    {
        return view('website.enroll.index');
    }
    public function contact()
    {
        return view('website.contact.index');
    }
    public function auth()
    {
        return view('website.auth.index');
    }
}
