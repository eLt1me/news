<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $news_id
 * @property string|null $content
 * @property int|null $status
 *  * @property date|null $date
 *
 * @property News $news
 * @property User $user
 */
class Comment extends \yii\db\ActiveRecord
{

    const POPULAR_NEWS_LIMIT = 10;
    const RECENT_NEWS_LIMIT = 10;
    const RECENT_COMMENTS_LIMIT = 10;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'news_id', 'status'], 'default', 'value' => null],
            [['user_id', 'news_id', 'status'], 'integer'],
            [['content'], 'string'],
            [['content'], 'required'],
            [['date'], 'date'],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'news_id' => 'News ID',
            'content' => 'Content',
            'status' => 'Status',
            'date' => 'Date'
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function findByNewsId($news_id)
    {
        return self::find()->where(['news_id' => $news_id])->all();
    }

    public function setComment($newsId)
    {
        $this->news_id = $newsId;
        $this->user_id = Yii::$app->user->id;
        $this->status = true;
        $this->date = date('Y-m-d H:i:s');
    }

    public function getRecentComments()
    {
        return self::find()->orderBy(['date' => SORT_DESC])->limit(self::RECENT_COMMENTS_LIMIT)->all();
    }

    public function getCommentOwnerUsername()
    {
        return $this->user->username;
    }

    public function getCommentOwnerImage()
    {
        return $this->user->image;
    }

    public function getNewsId()
    {
        return $this->news->id;
    }
}
