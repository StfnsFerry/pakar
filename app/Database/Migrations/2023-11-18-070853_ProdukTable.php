<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProdukTabel extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'id_toko' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'nama_produk' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'deskripsi' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'harga' => [
                    'type'          => 'DECIMAL',
                    'constraint'    => '10',
                ],
                'stok' => [
                    'type'          => 'INT',
                    'constraint'    => '10',
                ],
                'foto' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_toko','users','id');
        $this->forge->createTable('produk', true);
    }

    public function down()
    {
        $this->forge->dropTable('produk', true);
    }
}
