<?php

namespace app\modules\news\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $weight
 * @property integer $status_id
 * @property integer $created_at
 * @property integer $created_by
 * @property integer $updated_at
 * @property integer $updated_by
 * @property string $preview
 * @property string $text
 * @property string $image
 * @property string $category_id
 * @property string $tag
 * @property integer $views
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'weight', 'status_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'preview', 'text', 'image', 'category_id', 'tag', 'views'], 'required'],
            [['description', 'preview', 'text'], 'string'],
            [['weight', 'status_id', 'created_at', 'created_by', 'updated_at', 'updated_by', 'views'], 'integer'],
            [['title', 'image', 'category_id', 'tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Название'),
            'description' => Yii::t('app', 'Описание'),
            'weight' => Yii::t('app', 'Вес'),
            'status_id' => Yii::t('app', 'Cтатус'),
            'created_at' => Yii::t('app', 'Дата создания'),
            'created_by' => Yii::t('app', 'Создал'),
            'updated_at' => Yii::t('app', 'Дата изменения'),
            'updated_by' => Yii::t('app', 'Изменил'),
            'preview' => Yii::t('app', 'Анонс'),
            'text' => Yii::t('app', 'Текст'),
            'image' => Yii::t('app', 'Картинка'),
            'category_id' => Yii::t('app', 'Категория'),
            'tag' => Yii::t('app', 'Теги'),
            'views' => Yii::t('app', 'Просмотров'),
        ];
    }

    /**
     * @inheritdoc
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
}
