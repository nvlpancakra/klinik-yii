<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wilayah".
 *
 * @property string $Kota_Tinggal
 * @property string $Alamat
 * @property int $Kode_Pos
 *
 * @property Pegawai[] $pegawais
 */
class Wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kota_Tinggal', 'Alamat', 'Kode_Pos'], 'required'],
            [['Kode_Pos'], 'integer'],
            [['Kota_Tinggal', 'Alamat'], 'string', 'max' => 120],
            [['Kota_Tinggal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kota_Tinggal' => 'Kota Tinggal',
            'Alamat' => 'Alamat',
            'Kode_Pos' => 'Kode Pos',
        ];
    }

    /**
     * Gets query for [[Pegawais]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPegawais()
    {
        return $this->hasMany(Pegawai::class, ['Nama_Pegawai' => 'Kota_Tinggal']);
    }
}
