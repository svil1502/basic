<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $name Наименование группы
 * @property int $parent_id Родительская группа
 * @property string $accounting_id Код в 1С
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name', 'accounting_id'], 'string', 'max' => 255],
            [['accounting_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'parent_id' => 'Parent ID',
            'accounting_id' => 'Accounting ID',
        ];
    }
}
