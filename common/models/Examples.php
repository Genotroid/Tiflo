<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "examples".
 *
 * @property int $id
 * @property string $title
 * @property string $sample
 * @property string $full
 */
class Examples extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'examples';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'sample', 'full'], 'required'],
            [['sample', 'full'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'sample' => 'Sample',
            'full' => 'Full',
        ];
    }
}
