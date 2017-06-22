<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/6/14
 * Time: 22:21
 */
namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Cart extends ActiveRecord
{
//    public static function tableName()
//    {
//        return parent::tableName(); // TODO: Change the autogenerated stub
////        return "{{%cart}}";
//    }
    public static function tableName()
    {
        return "{{%cart}}";
    }

    public function rules()
    {
        return [
            [['productid','productnum','userid','price'], 'required'],
            ['createtime', 'safe']
        ];
    }
}