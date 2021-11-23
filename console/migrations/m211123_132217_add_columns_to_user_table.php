<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m211123_132217_add_columns_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%user}}', 'birthday', $this->date());
        $this->execute("CREATE TYPE gender AS ENUM ('male', 'female','other');");
        $this->addColumn('{{%user}}', 'gender', 'gender');
        $this->addColumn('{{%user}}', 'city', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%user}}', 'birthday');
        $this->dropColumn('{{%user}}', 'gender');
        $this->dropColumn('{{%user}}', 'city');
    }
}
