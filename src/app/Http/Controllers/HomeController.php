<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');

        // 自分の記事一覧を投稿日降順で取得
        $articles = \Auth::user()->articles()->orderBy('created_at', 'desc')->get();
        $data = [
            'articles' => $articles,
        ];
        return view('home', $data);
    }
}
