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
            'status' => "ENUM('Y', 'N', 'X') DEFAULT  'Y'" ,
            'category_id' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'is_deleted' => "ENUM('N', 'Y') DEFAULT 'N'" ,
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
