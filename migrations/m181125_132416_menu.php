<?php

use yii\db\Migration;

/**
 * Class m181125_132416_menu
 */
class m181125_132416_menu extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu}}', [
            'id' => $this->primaryKey(),
            //'tree' => $this->integer()->notNull(),
            'lft' => $this->integer()->notNull(),
            'rgt' => $this->integer()->notNull(),
            'depth' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181125_132416_menu cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181125_132416_menu cannot be reverted.\n";

        return false;
    }
    */
}
