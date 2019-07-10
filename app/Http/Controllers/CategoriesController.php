<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
    	$category = Category::get();
    	return view('')->with('category', $category);
    }
}
