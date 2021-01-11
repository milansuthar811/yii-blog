<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%posts}}`.
 */
class m210102_181703_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'postid' => $this->primaryKey(),
            'userid' => $this->string()->notNull(),
            'article_name' => $this->string()->notNull(),
            'article_desc' => $this->text()->notNull(),
            'cover_image_id' => $this->string(),
            'status' => $this->string()->notNull(),
            'category_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'is_deleted' => $this->integer()->notNull(),
         
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%posts}}');
    }
}
