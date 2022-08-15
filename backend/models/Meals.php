<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "meals".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $how_uz
 * @property string $how_ru
 * @property string $how_en
 * @property int $narxi
 * @property string $rasmi
 */
class Meals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $imageFile;
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
            [['name_uz', 'name_ru', 'name_en', 'how_uz', 'how_ru', 'how_en', 'narxi', 'rasmi'], 'required'],
            [['narxi'], 'integer'],
            [['name_uz', 'name_ru', 'name_en', 'how_uz', 'how_ru', 'how_en', 'rasmi'], 'string', 'max' => 100],
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'how_uz' => 'How Uz',
            'how_ru' => 'How Ru',
            'how_en' => 'How En',
            'narxi' => 'Narxi',
            'rasmi' => 'Rasmi',
        ];
    }

    public function upload()
    {
        $this->rasmi=$this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs(Yii::getAlias('@frontend') . '/web/rasmlar/' . $this->imageFile->baseName . '.' . $this->imageFile->extension,false);
            return true;
        } else {
            return false;
        }
    }
}
