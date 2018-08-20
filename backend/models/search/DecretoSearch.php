<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Decreto;

/**
 * DecretoSearch represents the model behind the search form of `backend\models\Decreto`.
 */
class DecretoSearch extends Decreto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Decreto', 'numeroDecreto', 'id'], 'integer'],
            [['fechaDeEnvio', 'fechaDecreto', 'proveedor', 'cuenta', 'fechaRecepcion','estado'], 'safe'],
            [['monto'], 'number'],
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
        $query = Decreto::find();

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
            'id_Decreto' => $this->id_Decreto,
            'numeroDecreto' => $this->numeroDecreto,
            'fechaDeEnvio' => $this->fechaDeEnvio,
            'fechaDecreto' => $this->fechaDecreto,
            'monto' => $this->monto,
            'fechaRecepcion' => $this->fechaRecepcion,
            'id' => $this->id,
            'estado' => $this->estado,

        ]);

        $query->andFilterWhere(['like', 'proveedor', $this->proveedor])
            ->andFilterWhere(['like', 'cuenta', $this->cuenta]);

        return $dataProvider;
    }
}
