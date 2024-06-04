<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $tanggal_lahir
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jenis_kelamin', 'alamat', 'tanggal_lahir'], 'required'],
            [['alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['jenis_kelamin'], 'string'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
        ];
    }
}
