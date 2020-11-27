<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property string $kd_dokter
 * @property string $nm_dokter
 * @property string $jns_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $no_telepon
 * @property string $sip
 * @property string $spesialisasi
 * @property int $bagi_hasil
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_dokter', 'nm_dokter', 'jns_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telepon', 'sip', 'spesialisasi', 'bagi_hasil'], 'required'],
            [['jns_kelamin'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['bagi_hasil'], 'integer'],
            [['kd_dokter'], 'string', 'max' => 4],
            [['nm_dokter', 'tempat_lahir', 'spesialisasi'], 'string', 'max' => 100],
            [['alamat'], 'string', 'max' => 200],
            [['no_telepon', 'sip'], 'string', 'max' => 20],
            [['kd_dokter'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_dokter' => 'Kd Dokter',
            'nm_dokter' => 'Nm Dokter',
            'jns_kelamin' => 'Jns Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'sip' => 'Sip',
            'spesialisasi' => 'Spesialisasi',
            'bagi_hasil' => 'Bagi Hasil',
        ];
    }
}
