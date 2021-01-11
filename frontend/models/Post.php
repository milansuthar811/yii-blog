<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $postid
 * @property string $userid
 * @property string $article_name
 * @property string $article_desc
 * @property string|null $cover_image_id
 * @property string $status
 * @property int $category_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $is_deleted
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'article_name', 'article_desc', 'status', 'created_at', 'updated_at', 'is_deleted'], 'required'],
            [['article_desc'], 'string'],
            [['category_id', 'created_at', 'updated_at', 'is_deleted'], 'integer'],
            [[ 'article_name', 'cover_image_id', 'status'], 'string', 'max' => 255],
            [['status'], 'unique'],
            [['cover_image_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'postid' => 'Postid',
            'userid' => 'Userid',
            'article_name' => 'Article Name',
            'article_desc' => 'Article Desc',
            'cover_image_id' => 'Cover Image ID',
            'status' => 'Status',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
