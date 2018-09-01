<?php

use yii\db\Migration;

/**
 * Class m180831_221134_add_amount_to_order_product
 */
class m180831_221134_add_amount_to_order_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('order_product','amount', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180831_221134_add_amount_to_order_product cannot be reverted.\n";
        $this->dropColumn('order_product','amount');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180831_221134_add_amount_to_order_product cannot be reverted.\n";

        return false;
    }
    */
}
