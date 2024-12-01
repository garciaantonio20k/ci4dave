<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateArticleTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'integer',
                'null' => false,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => 128,
                'null' => false,
            ],
            'content' => [
                'type' => 'text',
                'null' => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('articles');
    }

    public function down()
    {
        $this->forge->dropTable('articles');
    }
}
