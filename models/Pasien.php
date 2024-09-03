<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property string $Nama_Pasein
 * @property string $Tgl_Lahir
 * @property string $Jenis_Kelamin
 * @property string $Alamat
 * @property string $Kelurahan
 * @property string $Kecamatan
 * @property string $Provinsi
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
            [['Nama_Pasein', 'Tgl_Lahir', 'Jenis_Kelamin', 'Alamat', 'Kelurahan', 'Kecamatan', 'Provinsi'], 'required'],
            [['Tgl_Lahir'], 'safe'],
            [['Nama_Pasein', 'Jenis_Kelamin', 'Alamat', 'Kelurahan', 'Kecamatan', 'Provinsi'], 'string', 'max' => 120],
            [['Nama_Pasein'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nama_Pasein' => 'Nama Pasein',
            'Tgl_Lahir' => 'Tgl Lahir',
            'Jenis_Kelamin' => 'Jenis Kelamin',
            'Alamat' => 'Alamat',
            'Kelurahan' => 'Kelurahan',
            'Kecamatan' => 'Kecamatan',
            'Provinsi' => 'Provinsi',
        ];
    }
}
