<?php

use yii\db\Migration;

/**
 * Handles the creation of table `apidoc`.
 */
class m170802_063733_create_apidoc_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('apidoc', [
            'id' => $this->primaryKey(),
            'method' => $this->string(25)->notNull(),
            'model' => $this->string(25)->notNull(),
            'url' => $this->string(255)->notNull(),
            'title' => $this->string(255)->notNull(),
            'desc' => $this->text()->notNull(),
            'request' => $this->text(),
            'response' => $this->text()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('apidoc');
    }
}
