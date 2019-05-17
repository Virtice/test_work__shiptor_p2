<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m190517_113917_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sqlPath = __DIR__ . '\\' . __CLASS__ . '.sql';
        $this->execute(file_get_contents($sqlPath));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
