<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "decreto".
 *
 * @property int $id_Decreto
 * @property int $numeroDecreto
 * @property string $fechaDeEnvio
 * @property string $fechaDecreto
 * @property string $proveedor
 * @property double $monto
 * @property string $cuenta
 * @property string $fechaRecepcion
 * @property int $id
 * @property string $estado
 */
class Decreto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'decreto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['numeroDecreto', 'fechaDecreto', 'proveedor', 'monto', 'cuenta'], 'required'],
            [['id_Decreto', 'numeroDecreto', 'id'], 'integer'],
            [['fechaDeEnvio', 'fechaDecreto', 'fechaRecepcion','estado'], 'safe'],
            [['monto'], 'number'],
            [['proveedor', 'cuenta'], 'string', 'max' => 100],
            [['id_Decreto'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Decreto' => Yii::t('app', 'Id  Decreto'),
            'numeroDecreto' => Yii::t('app', 'Numero Decreto'),
            'fechaDeEnvio' => Yii::t('app', 'Fecha De Envio'),
            'fechaDecreto' => Yii::t('app', 'Fecha Decreto'),
            'proveedor' => Yii::t('app', 'Proveedor'),
            'monto' => Yii::t('app', 'Monto'),
            'cuenta' => Yii::t('app', 'Cuenta'),
            'fechaRecepcion' => Yii::t('app', 'Fecha Recepcion'),
            'id' => Yii::t('app', 'ID'),
            'estado' => Yii::t('app', 'Estado'),

        ];
    }
}
