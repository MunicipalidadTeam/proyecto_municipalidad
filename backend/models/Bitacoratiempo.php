<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bitacoratiempo".
 *
 * @property int $idBitacoraTiempo
 * @property string $Fecha
 * @property string $HoraInicio
 * @property string $HoraFinal
 * @property string $Interrupcion
 * @property double $Total
 * @property string $ActividadNoPlaneada
 * @property int $idActividadPlaneada
 * @property int $idProyecto
 * @property string $Artefacto
 * @property int $idUsuario
 *
 * @property Proyecto $proyecto
 */
class Bitacoratiempo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bitacoratiempo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fecha', 'HoraInicio', 'HoraFinal', 'Interrupcion'], 'safe'],
            [['Fecha'],'date','format'=>'dd-MM-yyyy'],
            [['HoraInicio','HoraFinal'],'date','format' =>'hh:mm a'],
            ['Interrupcion','match','pattern'=>'/[0-9][0-9]:[0-5][0-9]/','message'=>'Indique en formato hh:mm'],
            [['idActividadPlaneada', 'idProyecto', 'idUsuario'], 'integer'],
            [['ActividadNoPlaneada', 'Artefacto'], 'string', 'max' => 250],
            [['Fecha', 'HoraInicio', 'HoraFinal','Interrupcion','Artefacto'], 'required','message'=>'Campo requerido'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBitacoraTiempo' => Yii::t('app', 'Id Bitacora Tiempo'),
            'Fecha' => Yii::t('app', 'Fecha'),
            'HoraInicio' => Yii::t('app', 'Hora Inicio'),
            'HoraFinal' => Yii::t('app', 'Hora Final'),
            'Interrupcion' => Yii::t('app', 'Interrupcion'),
            'Total' => Yii::t('app', 'Total'),
            'ActividadNoPlaneada' => Yii::t('app', 'Actividad No Planeada'),
            'idActividadPlaneada' => Yii::t('app', 'Id Actividad Planeada'),
            'idProyecto' => Yii::t('app', 'Id Proyecto'),
            'Artefacto' => Yii::t('app', 'Artefacto'),
            'idUsuario' => Yii::t('app', 'Id Usuario'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProyecto()
    {
        return $this->hasOne(Proyecto::className(), ['idProyecto' => 'idProyecto']);
    }
}