<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%postsearch}}`.
 */
class m190410_214059_create_postsearch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postsearch}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%postsearch}}');
    }
}
