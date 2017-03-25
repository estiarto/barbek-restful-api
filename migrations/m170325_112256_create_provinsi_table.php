<?php

use yii\db\Migration;

/**
 * Handles the creation of table `provinsi`.
 */
class m170325_112256_create_provinsi_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('provinsi', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('provinsi');
    }
}
