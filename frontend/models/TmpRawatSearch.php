<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TmpRawat;

/**
 * TmpRawatSearch represents the model behind the search form of `app\models\TmpRawat`.
 */
class TmpRawatSearch extends TmpRawat
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'harga', 'bagi_hasil_dokter'], 'integer'],
            [['kd_tindakan', 'kd_dokter', 'kd_petugas'], 'safe'],
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
        $query = TmpRawat::find();

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
            'id' => $this->id,
            'harga' => $this->harga,
            'bagi_hasil_dokter' => $this->bagi_hasil_dokter,
        ]);

        $query->andFilterWhere(['like', 'kd_tindakan', $this->kd_tindakan])
            ->andFilterWhere(['like', 'kd_dokter', $this->kd_dokter])
            ->andFilterWhere(['like', 'kd_petugas', $this->kd_petugas]);

        return $dataProvider;
    }
}
