<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property string $kd_tindakan
 * @property string $nm_tindakan
 * @property int $harga
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_tindakan', 'nm_tindakan', 'harga'], 'required'],
            [['harga'], 'integer'],
            [['kd_tindakan'], 'string', 'max' => 4],
            [['nm_tindakan'], 'string', 'max' => 100],
            [['kd_tindakan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_tindakan' => 'Kd Tindakan',
            'nm_tindakan' => 'Nm Tindakan',
            'harga' => 'Harga',
        ];
    }
}
