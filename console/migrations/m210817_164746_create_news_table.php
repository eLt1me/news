<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m210817_164746_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'short_content' => $this->string(),
            'content' => $this->text(),
            'status' => $this->integer(),
            'category_id' => $this->integer(),
        ]);

        $this->createIndex(
            'idx-post-category_id',
            'news',
            'category_id'
        );

        $this->addForeignKey(
            'fx-post-category_id',
            'news',
            'category_id',
            'news_category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}
