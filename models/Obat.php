<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property string $Nama_Obat
 * @property string $Kode_Obat
 * @property string $Deskripsi_Obat
 * @property string $Kategori_Obat
 * @property string $Aturan_Pakai
 * @property int $Harga_Obat
 *
 * @property Tindakan $namaObat
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
            [['Nama_Obat', 'Kode_Obat', 'Deskripsi_Obat', 'Kategori_Obat', 'Aturan_Pakai', 'Harga_Obat'], 'required'],
            [['Harga_Obat'], 'integer'],
            [['Nama_Obat', 'Kode_Obat', 'Deskripsi_Obat', 'Kategori_Obat', 'Aturan_Pakai'], 'string', 'max' => 120],
            [['Nama_Obat'], 'unique'],
            [['Nama_Obat'], 'exist', 'skipOnError' => true, 'targetClass' => Tindakan::class, 'targetAttribute' => ['Nama_Obat' => 'Nama_Tindakan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nama_Obat' => 'Nama Obat',
            'Kode_Obat' => 'Kode Obat',
            'Deskripsi_Obat' => 'Deskripsi Obat',
            'Kategori_Obat' => 'Kategori Obat',
            'Aturan_Pakai' => 'Aturan Pakai',
            'Harga_Obat' => 'Harga Obat',
        ];
    }

    /**
     * Gets query for [[NamaObat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaObat()
    {
        return $this->hasOne(Tindakan::class, ['Nama_Tindakan' => 'Nama_Obat']);
    }
}
