<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "petugas".
 *
 * @property string $kd_petugas
 * @property string $nm_petugas
 * @property string $no_telepon
 * @property string $username
 * @property string $password
 * @property string $level
 */
class Petugas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'petugas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kd_petugas', 'nm_petugas', 'no_telepon', 'username', 'password'], 'required'],
            [['kd_petugas'], 'string', 'max' => 4],
            [['nm_petugas'], 'string', 'max' => 100],
            [['no_telepon', 'username', 'level'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 200],
            [['kd_petugas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kd_petugas' => 'Kd Petugas',
            'nm_petugas' => 'Nm Petugas',
            'no_telepon' => 'No Telepon',
            'username' => 'Username',
            'password' => 'Password',
            'level' => 'Level',
        ];
    }
}
