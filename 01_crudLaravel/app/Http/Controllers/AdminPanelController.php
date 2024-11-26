<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public readonly Category $category;
    public readonly Location $location;
    public function __construct()
    {
        $this->category = new Category();
        $this->location = new Location();
    }
    public function index() {
        $categories = $this->category->all();
        $locations = $this->location->all();
        return view('categories', ['categories' => $categories, 'locations' => $locations]);
    }
}
