<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property string $nomor_rm
 * @property string $nm_pasien
 * @property string $no_identitas
 * @property string $jns_kelamin
 * @property string $gol_darah
 * @property string $agama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $no_telepon
 * @property string $alamat
 * @property string $stts_nikah
 * @property string $pekerjaan
 * @property string $keluarga_status
 * @property string $keluarga_nama
 * @property string $keluarga_telepon
 * @property string $tgl_rekam
 * @property string $kd_petugas
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
            [['nomor_rm', 'nm_pasien', 'no_identitas', 'jns_kelamin', 'gol_darah', 'agama', 'tempat_lahir', 'tanggal_lahir', 'no_telepon', 'alamat', 'stts_nikah', 'pekerjaan', 'keluarga_status', 'keluarga_nama', 'keluarga_telepon', 'tgl_rekam', 'kd_petugas'], 'required'],
            [['jns_kelamin', 'gol_darah', 'stts_nikah', 'keluarga_status'], 'string'],
            [['tanggal_lahir', 'tgl_rekam'], 'safe'],
            [['nomor_rm'], 'string', 'max' => 6],
            [['nm_pasien', 'tempat_lahir', 'pekerjaan', 'keluarga_nama'], 'string', 'max' => 100],
            [['no_identitas'], 'string', 'max' => 40],
            [['agama'], 'string', 'max' => 30],
            [['no_telepon', 'keluarga_telepon'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 200],
            [['kd_petugas'], 'string', 'max' => 4],
            [['nomor_rm'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomor_rm' => 'Nomor Rm',
            'nm_pasien' => 'Nm Pasien',
            'no_identitas' => 'No Identitas',
            'jns_kelamin' => 'Jns Kelamin',
            'gol_darah' => 'Gol Darah',
            'agama' => 'Agama',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'no_telepon' => 'No Telepon',
            'alamat' => 'Alamat',
            'stts_nikah' => 'Stts Nikah',
            'pekerjaan' => 'Pekerjaan',
            'keluarga_status' => 'Keluarga Status',
            'keluarga_nama' => 'Keluarga Nama',
            'keluarga_telepon' => 'Keluarga Telepon',
            'tgl_rekam' => 'Tgl Rekam',
            'kd_petugas' => 'Kd Petugas',
        ];
    }
}
