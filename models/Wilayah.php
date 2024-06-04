<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property int $id_wilayah
 * @property string $kode_wilayah
 * @property string $nama_wilayah
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_wilayah', 'nama_wilayah'], 'required'],
            [['kode_wilayah'], 'string', 'max' => 5],
            [['nama_wilayah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayah' => 'Id Wilayah',
            'kode_wilayah' => 'Kode Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
        ];
    }
}
