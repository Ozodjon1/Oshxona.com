<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "meals".
 *
 * @property int $id
 * @property string $name
 * @property string $how
 * @property int $price
 * @property string $picture
 */
class Meals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'how', 'price', 'picture'], 'required'],
            [['price'], 'integer'],
            [['name', 'how', 'picture'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'how' => 'How',
            'price' => 'Price',
            'picture' => 'Picture',
        ];
    }
}
