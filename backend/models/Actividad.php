<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "actividad".
 *
 * @property int $idActividad
 * @property string $NombreActividad
 * @property int $Activo
 * @property int $idProyecto
 *
 * @property Proyecto $proyecto
 */
class Actividad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actividad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Activo',],'boolean'],
            [['idProyecto'],'integer'],
            [['NombreActividad'], 'string', 'max' => 200],
            [['NombreActividad'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idActividad' => Yii::t('app', 'Id Actividad'),
            'NombreActividad' => Yii::t('app', 'Nombre Actividad'),
            'Activo' => Yii::t('app', 'Activo'),
            'idProyecto' => Yii::t('app', 'Id Proyecto'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyecto()
    {
        return $this->hasOne(Proyecto::className(), ['idProyecto' => 'idProyecto']);
    }
    public function beforeSave($insert){
      parent::beforeSave($insert);
      if ($insert) {
        $this->Activo =1;
      }
      return true;
    }
}
