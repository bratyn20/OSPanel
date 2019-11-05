<?php


namespace app\controllers;


use app\models\Post;
use app\models\TestForm;
use yii\web\Controller;
use yii\web\Request;

class TestController extends Controller
{
    public function actionIndex()
    {
        $name = 'Joe';
        $surname = 'Dassin';
        return $this->render('index');
    }

    public function actionPage()
    {
//        $name = 'Joe';
//        $surname = 'Dassin';
        $form_model = new TestForm();
        if($form_model->load(\Yii::$app->request->post()))
        {
            var_dump(\Yii::$app->request->post());
            var_dump($form_model);
        }

        return $this->render('page', ['form_model' => $form_model]);
    }

    public function actionPost()
    {
        $posts = Post::find()->with('category')->all();
        return $this->render('post',[ 'posts' => $posts]);
    }

}