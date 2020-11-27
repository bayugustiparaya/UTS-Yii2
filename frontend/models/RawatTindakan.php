<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rawat_tindakan".
 *
 * @property int $id_tindakan
 * @property string $tgl_tindakan
 * @property string $no_rawat
 * @property string $kd_tindakan
 * @property int $harga
 * @property string $kd_dokter
 * @property int $bagi_hasil_dokter
 */
class RawatTindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rawat_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_tindakan', 'no_rawat', 'kd_tindakan', 'harga', 'kd_dokter', 'bagi_hasil_dokter'], 'required'],
            [['tgl_tindakan'], 'safe'],
            [['harga', 'bagi_hasil_dokter'], 'integer'],
            [['no_rawat'], 'string', 'max' => 7],
            [['kd_tindakan', 'kd_dokter'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'tgl_tindakan' => 'Tgl Tindakan',
            'no_rawat' => 'No Rawat',
            'kd_tindakan' => 'Kd Tindakan',
            'harga' => 'Harga',
            'kd_dokter' => 'Kd Dokter',
            'bagi_hasil_dokter' => 'Bagi Hasil Dokter',
        ];
    }
}
