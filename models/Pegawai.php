<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string|null $alamat
 * @property string|null $tanggal_lahir
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'required'],
            [['jenis_kelamin'], 'required'],
            [['alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
