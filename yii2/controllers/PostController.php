<?php


namespace app\controllers;
use Yii;


class PostController extends AppController
{

    public $layout = 'basic';
    public function actionIndex(){

//        $names = ['dsads', 'dsadasd', 'rqwrqw'];

//        $test
//        $test = $this -> debug($names);
//        return $this->render('test', ['text1' => $test]);

        if( Yii::$app->request->isAjax){
//            $this->debug($_GET);
           return $this->debug($_GET);
        }
        return $this->render('test');
    }

    public function actionShow(){
//        $this->layout = 'basic';
        return $this->render('show');
    }
}