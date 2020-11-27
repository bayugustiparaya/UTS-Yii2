<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjualan".
 *
 * @property string $no_penjualan
 * @property string $tgl_penjualan
 * @property string $pelanggan
 * @property string $keterangan
 * @property int $uang_bayar
 * @property string $kd_petugas
 */
class Penjualan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penjualan', 'tgl_penjualan', 'pelanggan', 'keterangan', 'uang_bayar', 'kd_petugas'], 'required'],
            [['tgl_penjualan'], 'safe'],
            [['uang_bayar'], 'integer'],
            [['no_penjualan'], 'string', 'max' => 7],
            [['pelanggan'], 'string', 'max' => 100],
            [['keterangan'], 'string', 'max' => 200],
            [['kd_petugas'], 'string', 'max' => 4],
            [['no_penjualan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penjualan' => 'No Penjualan',
            'tgl_penjualan' => 'Tgl Penjualan',
            'pelanggan' => 'Pelanggan',
            'keterangan' => 'Keterangan',
            'uang_bayar' => 'Uang Bayar',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
