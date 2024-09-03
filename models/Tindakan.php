<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property string $Nama_Tindakan
 * @property string $Kode_Tindakan
 * @property string $Kategori_Tindakan
 * @property string $Tanggal_Waktu
 * @property string $Nama_Pasien
 *
 * @property Obat $obat
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
            [['Nama_Tindakan', 'Kode_Tindakan', 'Kategori_Tindakan', 'Tanggal_Waktu', 'Nama_Pasien'], 'required'],
            [['Nama_Tindakan', 'Kode_Tindakan', 'Kategori_Tindakan', 'Tanggal_Waktu', 'Nama_Pasien'], 'string', 'max' => 120],
            [['Nama_Tindakan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nama_Tindakan' => 'Nama Tindakan',
            'Kode_Tindakan' => 'Kode Tindakan',
            'Kategori_Tindakan' => 'Kategori Tindakan',
            'Tanggal_Waktu' => 'Tanggal Waktu',
            'Nama_Pasien' => 'Nama Pasien',
        ];
    }

    /**
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(Obat::class, ['Nama_Obat' => 'Nama_Tindakan']);
    }
}
