<?php

namespace frontend\models;

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
 * @property date|null $date
 * @property int|null $views
 * @property int|null $likes
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
            [['content'], 'string'],
            [['status', 'category_id'], 'default', 'value' => null],
            [['status', 'category_id', 'views', 'likes'], 'integer'],
            [['title', 'short_content'], 'string', 'max' => 255],
            [['date',], 'date'],
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
            'date' => 'Date',
            'views' => 'Views',
            'likes' => 'Likes',
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

    public function getNumberOfViews(){
        return $this->views == null ? '0' : $this->views;
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

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getShortContent()
    {
        return $this->short_content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function getLikes()
    {
        return $this->likes;
    }

}
