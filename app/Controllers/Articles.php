<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index()
    {
        $articles = [
            ['title' => 'Title 1', 'content' => 'asdasdasdasda'],
            ['title' => 'Title 2', 'content' => 'qweqweqw']
        ];
        return view('Articles/index', ['articles' => $articles]);
    }
}
