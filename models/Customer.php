<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_User
 * @property string $Nama_Lengkap
 * @property string $Email
 * @property int $Nomor_Telepon
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_User', 'Nama_Lengkap', 'Email', 'Nomor_Telepon'], 'required'],
            [['id_User', 'Nomor_Telepon'], 'integer'],
            [['Nama_Lengkap', 'Email'], 'string', 'max' => 120],
            [['id_User'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_User' => 'Id User',
            'Nama_Lengkap' => 'Nama Lengkap',
            'Email' => 'Email',
            'Nomor_Telepon' => 'Nomor Telepon',
        ];
    }
}
