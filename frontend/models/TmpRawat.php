<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tmp_rawat".
 *
 * @property int $id
 * @property string $kd_tindakan
 * @property int $harga
 * @property string $kd_dokter
 * @property int $bagi_hasil_dokter
 * @property string $kd_petugas
 */
class TmpRawat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_rawat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_tindakan', 'harga', 'kd_dokter', 'bagi_hasil_dokter', 'kd_petugas'], 'required'],
            [['harga', 'bagi_hasil_dokter'], 'integer'],
            [['kd_tindakan', 'kd_dokter', 'kd_petugas'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_tindakan' => 'Kd Tindakan',
            'harga' => 'Harga',
            'kd_dokter' => 'Kd Dokter',
            'bagi_hasil_dokter' => 'Bagi Hasil Dokter',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
