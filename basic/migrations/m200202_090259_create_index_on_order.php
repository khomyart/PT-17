<?php

use yii\db\Migration;

/**
 * Class m200202_090259_create_index_on_order
 */
class m200202_090259_create_index_on_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('index_on_orders', 'orders', 'order_id', true);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropIndex('index_on_orders', 'orders');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200202_090259_create_index_on_order cannot be reverted.\n";

        return false;
    }
    */
}
