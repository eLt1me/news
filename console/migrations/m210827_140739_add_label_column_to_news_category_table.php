<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%news_category}}`.
 */
class m210827_140739_add_label_column_to_news_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news_category', 'label', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('news_category', 'label');
    }
}
