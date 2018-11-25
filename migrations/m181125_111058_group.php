<?php

use yii\db\Migration;

/**
 * Class m181125_111058_group
 */
class m181125_111058_group extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group}}', [
            'id' => self::primaryKey(),
            'name' => self::string()->comment('Наименование группы'),
            'parent_id' => self::integer()->comment('Родительская группа'),
            'accounting_id' => self::string()->comment('Код в 1С')->unique(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181125_111058_group cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181125_111058_group cannot be reverted.\n";

        return false;
    }
    */
}
