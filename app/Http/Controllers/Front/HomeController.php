<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        // $keyword = request()->keyword;

        // if ($keyword) {
        //     $articles = Article::with('Category')
        //                     ->whereStatus(1)
        //                     ->where('title', 'like', '%' .$keyword. '%')
        //                     ->latest()
        //                     ->paginate(6);
        // } else {
        //     $articles = Article::with('Category')->whereStatus(1)->latest()->paginate(6);
        // }
        
        return view('front.home.index',[
            'latest_post' => Article::with(['User','Category'])->latest()->first(),
            // 'articles' => Article::where('status', 1)->latest()->simplePaginate(6),
            'articles' => Article::with(['User','Category'])->whereStatus(1)->latest()->paginate(6),
            //'categories' => Category::latest()->get(),
            //'category_navbar' => Category::latest()->take(3)->get()           //di pindah ke SideWidgetProvider

        ]);
    }

    public function about(){

        return view('front.home.about',[
            //'categories' => Category::latest()->get(),
            //'category_navbar' => Category::latest()->take(3)->get()           //di pindah ke SideWidgetProvider

        ]);
    }
}
