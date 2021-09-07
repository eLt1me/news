<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%news}}`.
 */
class m110830_130523_add_image_column_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news', 'image', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('news', 'image');
    }
}
