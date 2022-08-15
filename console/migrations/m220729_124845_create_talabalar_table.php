<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%talabalar}}`.
 */
class m220729_124845_create_talabalar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%talabalar}}', [
            'id' => $this->primaryKey(),
            'ismi' => $this->string(),
            'familiyasi' => $this->string(),
            'yoshi' => $this->integer(),
            'kursi' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%talabalar}}');
    }
}
