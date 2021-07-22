<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_category}}`.
 */
class m210716_075315_create_tbl_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tbl_category}}');
    }
}
