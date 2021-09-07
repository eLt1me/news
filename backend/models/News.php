<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_content
 * @property string|null $content
 * @property int|null $status
 * @property int|null $category_id
 * @property string|null $image
 *
 * @property NewsCategory $category
 * @property Comment[] $comments
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'image'], 'string'],
            [['status', 'category_id'], 'default', 'value' => null],
            [['status', 'category_id'], 'integer'],
            [['title', 'short_content'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewsCategory::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'status' => 'Status',
            'category_id' => 'Category ID',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(NewsCategory::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['news_id' => 'id']);
    }
}
