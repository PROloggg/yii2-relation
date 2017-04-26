<?php

use yii\db\Migration;

/**
 * Handles the creation of table `relation`.
 */
class m170426_123231_create_relation_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('relation', [
            'id' => $this->primaryKey(),
            'model' => $this->string(55)->notNull(),
            'relation_model' => $this->string(55)->notNull(),
            'model_id' => $this->integer(11),
            'model_relation_id' => $this->integer(11),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('relation');
    }
}
