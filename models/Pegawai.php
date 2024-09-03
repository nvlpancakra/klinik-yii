<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_Pegawai
 * @property int $id_User
 * @property string $Jenis_Pegawai
 * @property string $Status_Pegawai
 * @property string $Jabatan
 * @property string $Tanggal_Bergabung
 * @property string $Unit_Kerja
 * @property string $Nama_Pegawai
 *
 * @property Wilayah $namaPegawai
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_User', 'Jenis_Pegawai', 'Status_Pegawai', 'Jabatan', 'Tanggal_Bergabung', 'Unit_Kerja', 'Nama_Pegawai'], 'required'],
            [['id_User'], 'integer'],
            [['Tanggal_Bergabung'], 'safe'],
            [['Jenis_Pegawai', 'Status_Pegawai', 'Jabatan', 'Unit_Kerja', 'Nama_Pegawai'], 'string', 'max' => 120],
            [['Nama_Pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::class, 'targetAttribute' => ['Nama_Pegawai' => 'Kota_Tinggal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pegawai' => 'Id Pegawai',
            'id_User' => 'Id User',
            'Jenis_Pegawai' => 'Jenis Pegawai',
            'Status_Pegawai' => 'Status Pegawai',
            'Jabatan' => 'Jabatan',
            'Tanggal_Bergabung' => 'Tanggal Bergabung',
            'Unit_Kerja' => 'Unit Kerja',
            'Nama_Pegawai' => 'Nama Pegawai',
        ];
    }

    /**
     * Gets query for [[NamaPegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPegawai()
    {
        return $this->hasOne(Wilayah::class, ['Kota_Tinggal' => 'Nama_Pegawai']);
    }
}
