<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function index($slugCategory){
        return view('front.category.index',[
            'articles' => Article::with('Category')->whereHas('Category', function($q) use ($slugCategory){
                $q->where('slug', $slugCategory);
            })->latest()->paginate(6),
            'category' => $slugCategory,
            //'category_navbar' => Category::latest()->take(3)->get()           //di pindah ke SideWidgetProvider

        ]);

        //Catatan : Category adalah nama relasi yg ada di model
    }

    public function allCategory(){

        $category = Category::withCount(['Articles' => function (Builder $query) {
            $query->where('status', 1);
        }])->take(30)->latest()->get();
        
        return view('front.category.all-category', [
            'category' => $category
        ]);

    }
}
