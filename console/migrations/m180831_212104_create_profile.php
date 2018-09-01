<?php

use yii\db\Migration;

/**
 * Class m180831_212104_create_profile
 */
class m180831_212104_create_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('profile', [
            'user_id' => $this->integer()->notNull(),
            'firstName' => $this->string(100),
            'lastName' => $this->string(100),
            'address' => $this->text(),
            'avatar' => $this->string(100),

        ]);
        $this->createIndex(
            'idx-profile-user_id',
            'profile',
            'user_id'
        );
        $this->addForeignKey(
            'fk-profile-user_id',
            'profile',
            'user_id',
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
        echo "m180831_212104_create_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180831_212104_create_profile cannot be reverted.\n";

        return false;
    }
    */
}
