<?php

use yii\db\Migration;

/**
 * Class m180831_215017_create_order
 */
class m180831_215017_create_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order',[
            'id'=> $this->primaryKey()->notNull(),
            'order_date' => $this->integer()->notNull(),
            'address' => $this->text()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

        /*$this->addIndex(
            'idx-order-user_id',
            'order',
            'user_id'
        );
        $this->addForeignKey(
            'fk-order-user_id',
            'order',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );*/
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180831_215017_create_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180831_215017_create_order cannot be reverted.\n";

        return false;
    }
    */
}
