<?php

use yii\db\Migration;

/**
 * Class m200201_233857_create_orders_clients_fk
 */
class m200201_233857_create_orders_clients_fk extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk_orders_clients',
            'orders',
            'client_id',
            'clients',
            'client_id',
            'RESTRICT',
            'CASCADE'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        /*echo "m200201_233857_create_orders_clients_fk cannot be reverted.\n";*/
        $this->dropForeignKey('fk_orders_clients', 'orders');
        /*return false;*/
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200201_233857_create_orders_clients_fk cannot be reverted.\n";

        return false;
    }
    */
}
