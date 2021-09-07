<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%news}}`.
 */
class m210827_135553_add_date_column_to_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('news', 'date', $this->date());

        $this->addColumn('news', 'views', $this->integer());

        $this->addColumn('news', 'likes', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('news', 'date');

        $this->dropColumn('news', 'views');

        $this->dropColumn('news', 'likes');
    }
}
