<?php

namespace App\Http\Controllers;


use App\Models\Articel;

class ArticleController extends Controller
{
    public function index()
    {
        $articel = Articel::all();
        return view('pages.article.index', [
            'title' => 'Artikel',
            'active' => 'article',
            'datas' => $articel,
        ]);
    }
}
