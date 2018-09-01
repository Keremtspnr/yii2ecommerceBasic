<?php

use yii\db\Migration;

/**
 * Class m180831_221729_add_status_to_order
 */
class m180831_221729_add_status_to_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('order','status', $this->integer()->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180831_221729_add_status_to_order cannot be reverted.\n";
        $this->dropColumn('order','status');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180831_221729_add_status_to_order cannot be reverted.\n";

        return false;
    }
    */
}
