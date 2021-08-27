<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m210817_164832_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'news_id' => $this->integer(),
            'content' => $this->text(),
            'status' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        $this->addForeignKey(
          'fk-post-user_id',
          'comment',
          'user_id',
          'user',
          'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-post-news-id',
            'comment',
            'news_id'
        );

        $this->addForeignKey(
            'fk-post-news_id',
            'comment',
            'news_id',
            'news',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
