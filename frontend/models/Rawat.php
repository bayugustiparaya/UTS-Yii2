<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "rawat".
 *
 * @property string $no_rawat
 * @property string $tgl_rawat
 * @property string $nomor_rm
 * @property string $hasil_diagnosa
 * @property int $uang_bayar
 * @property string $kd_petugas
 */
class Rawat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rawat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_rawat', 'tgl_rawat', 'nomor_rm', 'hasil_diagnosa', 'uang_bayar', 'kd_petugas'], 'required'],
            [['tgl_rawat'], 'safe'],
            [['uang_bayar'], 'integer'],
            [['no_rawat'], 'string', 'max' => 7],
            [['nomor_rm'], 'string', 'max' => 6],
            [['hasil_diagnosa'], 'string', 'max' => 100],
            [['kd_petugas'], 'string', 'max' => 4],
            [['no_rawat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_rawat' => 'No Rawat',
            'tgl_rawat' => 'Tgl Rawat',
            'nomor_rm' => 'Nomor Rm',
            'hasil_diagnosa' => 'Hasil Diagnosa',
            'uang_bayar' => 'Uang Bayar',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
