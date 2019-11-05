<?php

namespace app\models;

use yii\db\ActiveRecord;

class MyList extends ActiveRecord
{
    public static function getString()
    {
        return 'list';
    }

    public static function getArray()
    {
//        $qall = $this::find()->all();
       $data = self::find()->all();
        return $data;
    }

    public static function getOne($id)
    {
        $data = self::find()->where(['id'=> $id])->one();
        return $data;
    }
}