<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $Nomor_Tagihan
 * @property string $Nama_Pasein
 * @property string $Deskripsi_Tagihan
 * @property float $Total_Tagihan
 * @property string $Status_Pembayaran
 * @property string $Tanggal_Pembayaran
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nomor_Tagihan', 'Nama_Pasein', 'Deskripsi_Tagihan', 'Total_Tagihan', 'Status_Pembayaran', 'Tanggal_Pembayaran'], 'required'],
            [['Nomor_Tagihan'], 'integer'],
            [['Deskripsi_Tagihan'], 'string'],
            [['Total_Tagihan'], 'number'],
            [['Tanggal_Pembayaran'], 'safe'],
            [['Nama_Pasein', 'Status_Pembayaran'], 'string', 'max' => 120],
            [['Nomor_Tagihan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Nomor_Tagihan' => 'Nomor Tagihan',
            'Nama_Pasein' => 'Nama Pasein',
            'Deskripsi_Tagihan' => 'Deskripsi Tagihan',
            'Total_Tagihan' => 'Total Tagihan',
            'Status_Pembayaran' => 'Status Pembayaran',
            'Tanggal_Pembayaran' => 'Tanggal Pembayaran',
        ];
    }
}
