<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index()
    {
        /* check db */
        /*
        $db = db_connect();
        $db->listTables();
        */
        $model = new ArticleModel();
        $data = $model->findAll();
        //$data = $model->select(['id','title','content'])->findAll();// eligiendo campos

        //dd($data);
        /*
        $articles = [
            ['title' => 'Title 1', 'content' => 'asdasdasdasda'],
            ['title' => 'Title 2', 'content' => 'qweqweqw']
        ];*/
        return view('Articles/index', ['articles' => $data]);
    }

    public function show($id)
    {
        //dd($id);
        $model = new ArticleModel();
        $article = $model->find($id);
        return view('Articles/show', ['article' => $article]);
    }

    public function new()
    {
        return view('Articles/new');
    }

    public function create()
    {
        //dd($this->request->getPost());
        /*
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        */
        $model = new ArticleModel();
        $id = $model->insert($this->request->getPost());
        if ($id === false) {
            // validacion del modelo ha fallado
            //dd($model->errors());
            // volvemos al formulario
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $model->errors());
        }
        //dd($model->insertID); // funciona igual que getInsertID()
        // redirect to show
        return redirect()->to("articles/$id")->with('message','Article Saved');
    }

    public function edit($id)
    {
        $model = new ArticleModel();
        $article = $model->find($id);
        return view('Articles/edit', ['article' => $article]);
    }
}
