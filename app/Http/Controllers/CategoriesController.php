<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id)
    {
        $category = Category::find($id);

        return view('shop.categories')->with(
            [
                'category' => $category,
            ]
        );
    }
}
