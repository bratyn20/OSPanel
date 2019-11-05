<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\MyList;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHello()
    {
        $var = 'Моя страница';

        $array = MyList::getArray();

        return $this->render('hello', array('var'=> $var, 'array' => $array));
    }

    public function actionView($id)
    {
        $one = MyList::getOne($id);
        return $this->render('view', ['one' => $one]);
    }
}
