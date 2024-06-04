<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int $id_pasien
 * @property int $id_tindakan
 * @property int $id_obat
 * @property int $jumlah_obat
 * @property float $total_biaya
 *
 * @property Obat $obat
 * @property Pasien $pasien
 * @property Tindakan $tindakan
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_tindakan', 'id_obat', 'jumlah_obat', 'total_biaya'], 'required'],
            [['id_pasien', 'id_tindakan', 'id_obat', 'jumlah_obat'], 'integer'],
            [['total_biaya'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_pasien.nama' => 'Nama Pasien',
            'id_tindakan.nama_tindakan' => 'Nama Tindakan',
            'id_obat.nama_obat' => 'Obat',
            'jumlah_obat' => 'Jumlah Obat',
            'total_biaya' => 'Total Biaya',
        ];
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['id_obat' => 'id_obat']);
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(Pasien::class, ['id_pasien' => 'id_pasien']);
    }

    /**
     * Gets query for [[Tindakan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakan()
    {
        return $this->hasOne(Tindakan::class, ['id_tindakan' => 'id_tindakan']);
    }
}
