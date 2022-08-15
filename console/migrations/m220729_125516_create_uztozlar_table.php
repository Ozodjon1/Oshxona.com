<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%uztozlar}}`.
 */
class m220729_125516_create_uztozlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%uztozlar}}', [
            'id' => $this->primaryKey(),
            'ismi' => $this->string(),
            'familiyasi' => $this->string(),
            'yoshi' => $this->integer(),
            'lavozimi' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%uztozlar}}');
    }
}
