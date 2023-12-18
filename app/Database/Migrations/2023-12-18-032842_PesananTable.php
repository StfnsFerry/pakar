<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PesananTable extends Migration
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
                'id_produk' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'id_pembeli' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                ],
                'nama_penerima' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'alamat' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'telepon' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '20',
                ],
                'banyak_barang' => [
                    'type'          => 'INT',
                    'constraint'    => 11,
                ],
                'kurir' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'pembayaran' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'total_harga' => [
                    'type'          => 'INT',
                    'constraint'    => 11,
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
        $this->forge->addForeignKey('id_pembeli','users','id');
        $this->forge->addForeignKey('id_produk','produk','id');
        $this->forge->createTable('pesanan', true);
    }

    public function down()
    {
        $this->forge->dropTable('pesanan', true);
    }
}
