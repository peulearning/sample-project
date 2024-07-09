<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m240709_124710_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if ($this->db->getTableSchema('{{%books}}', true) === null) {
            $this->createTable('{{%books}}', [
                'id' => $this->primaryKey(),
                'title' => $this->string()->notNull(),
                'author_id' => $this->integer()->notNull(),
                'category_id' => $this->integer(),
                'isbn' => $this->string(13)->unique(),
                'published_date' => $this->date(),
                'created_at' => $this->dateTime()->notNull()->defaultExpression('NOW()'),
                'updated_at' => $this->dateTime()->notNull()->defaultExpression('NOW()'),
            ]);
        } else {
            echo "Table {{%books}} already exists. Skipping creation.\n";
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
