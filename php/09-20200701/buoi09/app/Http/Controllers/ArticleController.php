<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = DB::table('articles')->get();
        return view('hien-thi-articles',[
            'articles' => $articles
        ]);
    }
}
