<?php

use yii\db\Migration;

/**
 * Class m200201_230013_table_orders_add_column_operator_id
 */
class m200201_230013_table_orders_add_column_operator_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'orders',
            'operator_id',
            $this->integer(11)->unsigned()->defaultValue(null)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('orders', 'operator_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200201_230013_table_orders_add_column_operator_id cannot be reverted.\n";

        return false;
    }
    */
}
