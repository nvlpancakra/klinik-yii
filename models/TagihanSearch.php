<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tagihan;

/**
 * TagihanSearch represents the model behind the search form of `app\models\Tagihan`.
 */
class TagihanSearch extends Tagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nomor_Tagihan'], 'integer'],
            [['Nama_Pasein', 'Deskripsi_Tagihan', 'Status_Pembayaran', 'Tanggal_Pembayaran'], 'safe'],
            [['Total_Tagihan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tagihan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Nomor_Tagihan' => $this->Nomor_Tagihan,
            'Total_Tagihan' => $this->Total_Tagihan,
            'Tanggal_Pembayaran' => $this->Tanggal_Pembayaran,
        ]);

        $query->andFilterWhere(['like', 'Nama_Pasein', $this->Nama_Pasein])
            ->andFilterWhere(['like', 'Deskripsi_Tagihan', $this->Deskripsi_Tagihan])
            ->andFilterWhere(['like', 'Status_Pembayaran', $this->Status_Pembayaran]);

        return $dataProvider;
    }
}
