<?php

namespace app\models;


use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $date
 * @property string $title
 * @property string $text
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
            [['date'], 'safe'],
            [['date'], 'default', 'value'=> new Expression("Now()")],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 255],
            [['title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'title' => 'Title',
            'text' => 'Text',
        ];
    }
}
