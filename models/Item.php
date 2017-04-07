<?php

namespace app\models;

use Yii;

class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['cat_id', 'gallery'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['manufacturer', 'wood', 'wet', 'size', 'grade', 'img'], 'string', 'max' => 255],
            [['price'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'cat_id' => 'Категория',
            'img' => 'Изображение',
            'price' => 'Стоимость',            
            'manufacturer' => 'Производиель',
            'wood' => 'Порода дерева',
            'wet' => 'Влажность',
            'size' => 'Размеры',
            'grade' => 'Сортность',
            
        ];
    }
}
