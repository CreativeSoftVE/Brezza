<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Footer;
use App\Contact;
use App\Step;
use App\Whoare;
use App\Product;
use App\Benefit;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function landing()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $products = Product::all();
        $footers = Footer::first();
        $contacts = Contact::first();
        $steps = Step::first();
        $whoares = Whoare::first();
        $benefits = Benefit::first();
        return view('landing.index')
                ->with('tags', $tags)
                ->with('categories', $categories)
                ->with('products', $products)
                ->with('footers', $footers)
                ->with('contacts', $contacts)
                ->with('steps', $steps)
                ->with('whoares', $whoares)
                ->with('benefits', $benefits);
    }
}
