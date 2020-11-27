<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pendaftaran".
 *
 * @property string $no_daftar
 * @property string $nomor_rm
 * @property string $tgl_daftar
 * @property string $tgl_janji
 * @property string $jam_janji
 * @property string $keluhan
 * @property string $kd_tindakan
 * @property int $nomor_antri
 * @property string $kd_petugas
 */
class Pendaftaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendaftaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_daftar', 'nomor_rm', 'tgl_daftar', 'tgl_janji', 'jam_janji', 'keluhan', 'kd_tindakan', 'nomor_antri', 'kd_petugas'], 'required'],
            [['tgl_daftar', 'tgl_janji', 'jam_janji'], 'safe'],
            [['nomor_antri'], 'integer'],
            [['no_daftar'], 'string', 'max' => 7],
            [['nomor_rm'], 'string', 'max' => 6],
            [['keluhan'], 'string', 'max' => 100],
            [['kd_tindakan', 'kd_petugas'], 'string', 'max' => 4],
            [['no_daftar'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_daftar' => 'No Daftar',
            'nomor_rm' => 'Nomor Rm',
            'tgl_daftar' => 'Tgl Daftar',
            'tgl_janji' => 'Tgl Janji',
            'jam_janji' => 'Jam Janji',
            'keluhan' => 'Keluhan',
            'kd_tindakan' => 'Kd Tindakan',
            'nomor_antri' => 'Nomor Antri',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
