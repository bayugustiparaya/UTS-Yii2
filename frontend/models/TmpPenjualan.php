<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tmp_penjualan".
 *
 * @property int $id
 * @property string $kd_obat
 * @property int $jumlah
 * @property string $kd_petugas
 */
class TmpPenjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tmp_penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_obat', 'jumlah', 'kd_petugas'], 'required'],
            [['jumlah'], 'integer'],
            [['kd_obat'], 'string', 'max' => 5],
            [['kd_petugas'], 'string', 'max' => 4],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_obat' => 'Kd Obat',
            'jumlah' => 'Jumlah',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
