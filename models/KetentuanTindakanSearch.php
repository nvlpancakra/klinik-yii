<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KetentuanTindakan;

/**
 * KetentuanTindakanSearch represents the model behind the search form of `app\models\KetentuanTindakan`.
 */
class KetentuanTindakanSearch extends KetentuanTindakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Dosis_Obat', 'Obat', 'Deskripsi', 'Nama_Tindakan'], 'safe'],
            [['Biaya'], 'number'],
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
        $query = KetentuanTindakan::find();

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
            'Biaya' => $this->Biaya,
        ]);

        $query->andFilterWhere(['like', 'Dosis_Obat', $this->Dosis_Obat])
            ->andFilterWhere(['like', 'Obat', $this->Obat])
            ->andFilterWhere(['like', 'Deskripsi', $this->Deskripsi])
            ->andFilterWhere(['like', 'Nama_Tindakan', $this->Nama_Tindakan]);

        return $dataProvider;
    }
}
