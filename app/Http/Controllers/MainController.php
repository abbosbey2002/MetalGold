<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ActiveClient;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryOfProduct;
use App\Models\Commit;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Image;
use App\Models\Link;
use App\Models\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private function findNews($category_id)
    {
        return CategoryOfProduct::where('category_id', $category_id);
    }

    public function index()
    {
        $homes = Home::latest()->take(1)->get();
        $abouts = About::latest()->take(1)->get();
        $photos = CategoryOfProduct::orderBy('created_at', 'desc')->take(3)->get(['name_uz', 'name_ru', 'name_en', 'photo']);
        $teams = Team::latest()->take(2)->get();
        $categories = Category::latest()->take(6)->get();
        $our_teams = Team::latest()->skip(2)->take(4)->get();
        $commits = Commit::latest()->take(4)->get();
        $contacts = Contact::latest()->take(1)->get();
        $actives = ActiveClient::latest()->take(1)->get();
        $links = Link::latest()->take(1)->get();
        $clients = Image::latest()->take(8)->get();
        $blogs = Blog::latest()->take(4)->get(['description_uz', 'description_ru', 'description_en', 'photo', 'created_at']);
        $blog_text = Blog::latest()->take(1)->get(['title_uz', 'title_ru', 'title_en', 'short_content_uz', 'short_content_ru', 'short_content_en', 'content_uz', 'content_ru', 'content_en']);
        $popular_products = $this->findNews(1);

        return view('index', compact(
            'abouts',
            'homes',
            'contacts',
            'actives',
            'links',
            'blogs',
            'blog_text',
            'popular_products',
            'categories',
            'clients',
            'teams',
            'our_teams',
            'commits',
            'photos'
        ));
    }

    public function about()
    {
        $abouts = About::latest()->take(1)->get();
        $category_of_product = CategoryOfProduct::orderBy('created_at', 'desc')->take(1)->get(['title_uz', 'title_ru', 'title_en', 'short_content_uz', 'short_content_ru', 'short_content_en']);
        $photos = CategoryOfProduct::orderBy('created_at', 'desc')->take(3)->get(['name_uz', 'name_ru', 'name_en', 'photo']);
        $clients = Image::latest()->take(8)->get();
        $teams = Team::latest()->take(2)->get();
        $our_teams = Team::latest()->skip(2)->take(4)->get();
        $commits = Commit::latest()->take(3)->get();

        return view('about', compact(
            'abouts',
            'category_of_product',
            'clients',
            'teams',
            'our_teams',
            'commits',
            'photos',
        ));
    }
    public function blog()
    {
        $blogs = Blog::latest()->paginate(8);
        $categories = Category::orderBy('created_at', 'desc')->take(6)->get(['name_uz', 'name_ru', 'name_en']);
        return view('blog', compact(
            'blogs',
            'categories',
        ));
    }
    public function product()
    {
        $product = CategoryOfProduct::all();
        return view('product')->with('products', $product);
    }
    public function contact()
    {

        return view('contact');
    }
    public function category()
    {
        return view('category');
    }
}
