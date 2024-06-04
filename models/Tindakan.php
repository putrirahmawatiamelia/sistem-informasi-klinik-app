<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $nama_tindakan
 * @property float $biaya
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'biaya'], 'required'],
            [['biaya'], 'number'],
            [['nama_tindakan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'nama_tindakan' => 'Nama Tindakan',
            'biaya' => 'Biaya',
        ];
    }
}
