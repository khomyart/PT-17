<?php

use yii\db\Migration;

/**
 * Class m200201_233333_create_table_clients
 */
class m200201_233333_create_table_clients extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('clients', [
                'client_id'  => $this->primaryKey(11)->unsigned(),
                'first_name' => $this->string(128)->notNull(),
                'last_name'  => $this->string(128)->notNull()->defaultValue(''),
                'phone'      => $this->string(32)->notNull()->defaultValue(''),
                'email'      => $this->string(128)->defaultValue(''),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clients');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200201_233333_create_table_clients cannot be reverted.\n";

        return false;
    }
    */
}
