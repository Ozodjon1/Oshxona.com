<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mehmonlar}}`.
 */
class m220729_125314_create_mehmonlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mehmonlar}}', [
            'id' => $this->primaryKey(),
            'ismi' => $this->string(),
            'familiyasi' => $this->string(),
            'yoshi' => $this->integer(),
            'qayerdan' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mehmonlar}}');
    }
}
