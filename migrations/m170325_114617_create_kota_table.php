<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kota`.
 * Has foreign keys to the tables:
 *
 * - `provinsi`
 */
class m170325_114617_create_kota_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kota', [
            'id' => $this->primaryKey(),
            'provinsi_id' => $this->integer()->notNull(),
            'nama' => $this->string(50),
        ]);

        // creates index for column `provinsi_id`
        $this->createIndex(
            'idx-kota-provinsi_id',
            'kota',
            'provinsi_id'
        );

        // add foreign key for table `provinsi`
        $this->addForeignKey(
            'fk-kota-provinsi_id',
            'kota',
            'provinsi_id',
            'provinsi',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `provinsi`
        $this->dropForeignKey(
            'fk-kota-provinsi_id',
            'kota'
        );

        // drops index for column `provinsi_id`
        $this->dropIndex(
            'idx-kota-provinsi_id',
            'kota'
        );

        $this->dropTable('kota');
    }
}
