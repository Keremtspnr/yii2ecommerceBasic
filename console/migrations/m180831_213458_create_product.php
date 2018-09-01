<?php

use yii\db\Migration;

/**
 * Class m180831_213458_create_product
 */
class m180831_213458_create_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'name' => $this->string(255)->notNull(),
            'decsription' => $this->text()->notNull(),
            'price' => $this->integer()->notNull(),
            'created_by' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_by' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        //public void createIndex ( $name, $table, $columns, $unique = false )
        $this->createIndex(
            'idx-product-category_id',
            'product',
            'category_id'
        );
        //public void addForeignKey ( $name, $table, $columns, $refTable, $refColumns, $delete = null, $update = null )
        $this->addForeignKey(
            'fk-product-category_id',
            'product',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-product-created_by',
            'product',
            'created_by'
        );
        $this->addForeignKey(
            'fk-product-created_by',
            'product',
            'created_by',
            'user',
            'id',
            'CASCADE'
        );
        $this->createIndex(
            'idx-product-updated_by',
            'product',
            'updated_by'
        );
        $this->addForeignKey(
            'fk-product-updated_by',
            'product',
            'updated_by',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180831_213458_create_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180831_213458_create_product cannot be reverted.\n";

        return false;
    }
    */
}
