<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_category}}`.
 */
class m210817_164716_create_news_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'status' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%news_category}}');
    }
}
