<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjualan_item".
 *
 * @property string $no_penjualan
 * @property string $kd_obat
 * @property int $harga_modal
 * @property int $harga_jual
 * @property int $jumlah
 */
class PenjualanItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penjualan_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_penjualan', 'kd_obat', 'harga_modal', 'harga_jual', 'jumlah'], 'required'],
            [['harga_modal', 'harga_jual', 'jumlah'], 'integer'],
            [['no_penjualan'], 'string', 'max' => 7],
            [['kd_obat'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_penjualan' => 'No Penjualan',
            'kd_obat' => 'Kd Obat',
            'harga_modal' => 'Harga Modal',
            'harga_jual' => 'Harga Jual',
            'jumlah' => 'Jumlah',
        ];
    }

    public static function primaryKey()
    {
        return ['no_penjualan','kd_obat'];
    }
}
