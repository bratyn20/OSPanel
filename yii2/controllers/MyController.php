<?php


namespace app\controllers;


use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hi = 'hello world';
        $names = ['Zaytsev', 'Petrov', 'Ivanov'];
//        return $this->render('index', ['hello' => $hi,
//                                            'names' => $names]);

        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost(){

        return 'BlogPost!';
    }
}