<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news_tag}}`.
 */
class m211026_121637_create_news_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%news_tag}}', [
            'news_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull()
        ]);

        $this->addPrimaryKey(
            'news-tag_pk',
            'news_tag',
            ['news_id', 'tag_id']
        );

        $this->createIndex(
            '{{%idx-news_tag-news_id}}',
            '{{%news_tag}}',
            'news_id'
        );

        // add foreign key for table `{{%event}}`
        $this->addForeignKey(
            '{{%fk-news_tag-news_id}}',
            '{{%news_tag}}',
            'news_id',
            '{{%news}}',
            'id',
            'CASCADE'
        );

        // creates index for column `filter_id`
        $this->createIndex(
            '{{%idx-news_tag-tag_id}}',
            '{{%news_tag}}',
            'tag_id'
        );

        // add foreign key for table `{{%event_filter}}`
        $this->addForeignKey(
            '{{%fk-news_tag-tag_id}}',
            '{{%news_tag}}',
            'tag_id',
            '{{%tag}}',
            'id',
            'CASCADE'
        );
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('news-tag_pk', 'news_tag');
        $this->dropIndex('idx-news_tag-news_id', 'news_tag');
        $this->dropForeignKey('fk-news_tag-news_id', 'news_tag');
        $this->dropIndex('idx-news_tag-tag_id', 'news_tag');
        $this->dropForeignKey('fk-news_tag-tag_id', 'news_tag');
        $this->dropTable('{{%news_tag}}');
    }
}
