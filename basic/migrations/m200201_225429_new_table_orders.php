<?php

use yii\db\Migration;

/**
 * Class m200201_225429_new_table_orders
 */
class m200201_225429_new_table_orders extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('orders', [
                'order_id' => $this->primaryKey(11)->unsigned(),
                'client_id' => $this->integer(11)->unsigned()->defaultValue(null),
                'subtotal' => $this->decimal(12,2)->defaultValue(0)->notNull(),
                'discount' => $this->decimal(12,2)->defaultValue(0)->notNull(),
                'total' => $this->decimal(12,2)->defaultValue(0)->notNull(),
                'timestamp' => $this->dateTime()->notNull(),
                'notes' => $this->text()->notNull(),
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('orders');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200201_225429_new_table_orders cannot be reverted.\n";

        return false;
    }
    */
}
