<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Category;
use App\Models\Page;
use App\Models\Facility;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = Auth::user();

        $articles = Article::count();

        $categories = Category::count();

        $pages = Page::count();

        $facilities = Facility::count();

        return view('backend.dashboard.index', compact('profile', 'articles', 'categories', 'pages', 'facilities'));
    }
}
