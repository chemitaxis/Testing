<?php

use App\Article;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $articles = Article::where('price', '>', 1)->get();
    return view('test')->with('articles',$articles);
});

Route::get('/pagination', function (Request $request) {
    $articles = Article::where('price', '>', 1);
    $sort = null;
    if ($request->has('sort')) {
        $sort = $request->get('sort');
        $articles = $articles->orderBy($request->get('sort'));
    }
    $articles = $articles->paginate(10);
    $page_appends = [
        'sort' => $sort
    ];
    return view('welcome')->with('articles',$articles)->with('page_appends', $page_appends);
});
