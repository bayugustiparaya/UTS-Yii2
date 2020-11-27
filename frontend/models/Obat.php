<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $kd_obat
 * @property string $nm_obat
 * @property int $harga_modal
 * @property int $harga_jual
 * @property int $stok
 * @property string $keterangan
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_obat', 'nm_obat', 'harga_modal', 'harga_jual', 'stok', 'keterangan'], 'required'],
            [['harga_modal', 'harga_jual', 'stok'], 'integer'],
            [['kd_obat'], 'string', 'max' => 5],
            [['nm_obat', 'keterangan'], 'string', 'max' => 100],
            [['kd_obat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_obat' => 'Kd Obat',
            'nm_obat' => 'Nm Obat',
            'harga_modal' => 'Harga Modal',
            'harga_jual' => 'Harga Jual',
            'stok' => 'Stok',
            'keterangan' => 'Keterangan',
        ];
    }
}
