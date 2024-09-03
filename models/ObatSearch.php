<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Obat;

/**
 * ObatSearch represents the model behind the search form of `app\models\Obat`.
 */
class ObatSearch extends Obat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Obat', 'Kode_Obat', 'Deskripsi_Obat', 'Kategori_Obat', 'Aturan_Pakai'], 'safe'],
            [['Harga_Obat'], 'integer'],
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
        $query = Obat::find();

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
            'Harga_Obat' => $this->Harga_Obat,
        ]);

        $query->andFilterWhere(['like', 'Nama_Obat', $this->Nama_Obat])
            ->andFilterWhere(['like', 'Kode_Obat', $this->Kode_Obat])
            ->andFilterWhere(['like', 'Deskripsi_Obat', $this->Deskripsi_Obat])
            ->andFilterWhere(['like', 'Kategori_Obat', $this->Kategori_Obat])
            ->andFilterWhere(['like', 'Aturan_Pakai', $this->Aturan_Pakai]);

        return $dataProvider;
    }
}
