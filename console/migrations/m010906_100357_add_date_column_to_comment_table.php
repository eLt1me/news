<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%comment}}`.
 */
class m010906_100357_add_date_column_to_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('comment', 'date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('comment', 'date');
    }
}
