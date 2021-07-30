<?php

namespace App\Http\Controllers;

use App\Category;
use App\Repositories\CategoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;    
    }


    public function index()
    {
        return response()->json([
            'status' => true,
            'categories' => $this->category->getAll() ? $this->category->getAll() : null
        ]);
    }
}
